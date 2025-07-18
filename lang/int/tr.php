<?php
// Exibir todos os erros e mensagens de aviso
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Caminho para o arquivo de log
$log_file = 'translate_log.txt';

// Função para escrever no arquivo de log
function escreverLog($mensagem) {
    global $log_file;
    $data_hora = date('Y-m-d H:i:s');
    $mensagem_formatada = "[$data_hora] $mensagem\n";
    error_log($mensagem_formatada, 3, $log_file);
}

// Função para traduzir usando a biblioteca lib/googletranslate.php
function traduzirTexto($texto, $linguagem_destino) {
    require_once 'lib/googletranslate.php';

    $traducao = translate($texto, 'auto', $linguagem_destino);

    return $traducao;
}

function extractValue($fileContent, $string_php) {
    $startIndex = strpos($fileContent, $string_php . ' = "') + strlen($string_php . ' = "');
    $endIndex = strpos($fileContent, '";', $startIndex);
    return substr($fileContent, $startIndex, $endIndex - $startIndex);
}

function formatLangVar($input, $display_text) {
    // Adiciona $_LANG se não estiver presente
    if (strpos($input, '$_LANG') === false) {
        $input = '$_LANG[\'' . trim($input, "[]' ") . '\']';
    }
    
    // Expressão regular para capturar todas as partes da variável
    $pattern = '/(?:\$_LANG|\[\'|\[)([^\]]+)(?:\'\])?/';
    preg_match_all($pattern, $input, $matches);

    // Construir a variável formatada com todos os índices capturados
    $variable = "\$_LANG";
    foreach ($matches[1] as $index) {
        $index = trim($index, "[]' ");
        $variable .= "['$index']";
    }

    // Retornar a variável formatada com o valor atribuído
    return "$variable = \"$display_text\";";
}

function createfile($directory, $filename) {
    // Verifica se o diretório existe
    if (!file_exists($directory)) {
        // Cria o diretório
        mkdir($directory, 0755, true);
    }
   $filepath = $directory . '/' . $filename;
    // Verifica se o arquivo existe
    if (!file_exists($filepath)) {
        // Cria o arquivo
        touch($filepath);
        file_put_contents($filepath, "<?php\n");
    }
}

function checkLangVariableExists($filePath, $variableName) {
    // Lê o conteúdo do arquivo
    $content = file_get_contents($filePath);

    // Constrói o padrão de busca dinamicamente
    $pattern = '/\$_LANG';
    $variableParts = explode('.', $variableName);
    foreach ($variableParts as $part) {
        $pattern .= '\[\'?' . preg_quote($part, '/') . '\'?\]';
    }
    $pattern .= '/';

    // Verifica se o padrão existe no conteúdo
    if (preg_match($pattern, $content)) {
        return true;
    } else {
        return false;
    }
}

function updateLangVariable($filePath, $variableName, $newPhrase) {
    // Lê o conteúdo do arquivo
    $content = file_get_contents($filePath);

    // Escapa o nome da variável para uso em regex
    $escapedVariableName = preg_quote($variableName, '/');

    // Constrói o padrão de busca dinamicamente
    $pattern = '/(\$_LANG\[\s*[\'"]' . $escapedVariableName . '[\'"]\s*\]\s*=\s*")[^"]*(")/';

    // Função de substituição para atualizar a variável $_LANG['...']
    $replaceFunc = function ($matches) use ($newPhrase) {
        return $matches[1] . $newPhrase . $matches[2];
    };

    // Realiza a substituição no conteúdo
    $updatedContent = preg_replace_callback($pattern, $replaceFunc, $content);

    if ($updatedContent !== null) {
        // Escreve o conteúdo atualizado de volta ao arquivo
        if (file_put_contents($filePath, $updatedContent) !== false) {
            return true; // Sucesso na atualização
        } else {
            return false; // Falha ao escrever no arquivo
        }
    } else {
        return false; // Variável $_LANG['...'] não encontrada
    }
}




// Função para processar a tradução
function processarTraducao($string_php, $frase_original) {
    $logs = []; // Array para armazenar os logs

    $logs[] = 'Iniciando processo de tradução para string: ' . htmlspecialchars($string_php);

    // Diretórios relevantes
    $dirwork = '../..';
    $lang_dir = $dirwork . '/lang';
    $overrides_dir = $lang_dir . '/overrides';

    // Obtém arquivos de linguagem
    $linguagens = array_diff(glob($lang_dir . '/*.php'), [$lang_dir . '/index.php']);

    if (is_array($linguagens) && count($linguagens) > 0) {
        foreach ($linguagens as $arquivo) {
            $base_nome = basename($arquivo);
            $logs[] = "";

            // Lê conteúdo do arquivo
            $conteudo = file_get_contents($arquivo);

            // Extrai frase original se não fornecida
            if (!$frase_original) {
                $frase_original = extractValue($conteudo, '$_LANG[\'' . $string_php . '\']');
            }

            // Código do idioma
            $codigo_idioma = substr(extractValue($conteudo, '$_LANG[\'locale\']'), 0, 2);

            // Diretório de destino
            $destino = $overrides_dir . '/' . $base_nome;
            createfile($overrides_dir, $base_nome);

            // Traduz e formata variável de linguagem
            $traducao = traduzirTexto($frase_original, $codigo_idioma);
            $trlangvar = formatLangVar($string_php, addslashes($traducao))."\n";

            // Insere ou atualiza variável de linguagem
            if (!checkLangVariableExists($destino, $string_php)) {
                file_put_contents($destino, $trlangvar, FILE_APPEND | LOCK_EX);
                $logs[] = "[$codigo_idioma] $traducao - Adicionado em $base_nome";
            } else {
                updateLangVariable($destino, $string_php, $traducao);
                $logs[] = "[$codigo_idioma] $traducao - Atualizado em $base_nome";
            }
        }

        $logs[] = "Traduções adicionadas ou substituidas em lang/overrides";
    } else {
        $logs[] = "Nenhum arquivo de linguagem encontrado em $dirwork.";
    }

    // Gravar logs em uma única linha
    $log_line = implode(' | ', $logs);
    escreverLog($log_line);

    // Preparar saída em HTML
    $html_output = '<div style="font-family: Arial, sans-serif; max-width: 699px; margin: 1px auto; padding: 20px; background-color: #f0f0f0; border: 1px solid #ccc; border-radius: 5px;">';
    foreach ($logs as $log) {
        $html_output .= '<p style="margin: 3px 0;">' . htmlspecialchars($log) . '</p>';
    }
    $html_output .= '<br><p style="margin: 5px 0;">String gerada: {$LANG.'.$string_php.'}</p>';
    $html_output .= '<p>Redirecionando de volta em breve...</p>'; 
    $html_output .= '</div>';
    $html_output .= '<script>setTimeout(function(){history.go(-1); }, 10*1000);</script>';
    // Exibir HTML formatado
    echo $html_output;

    // Redirecionar de volta para index.php após 10 segundos
    // header('refresh: 10; url=' . $_SERVER['HTTP_REFERER']);
    exit;
}
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura a chave específica e a frase original do formulário
    $string_php = $_POST['string_php'];
    $frase_original = $_POST['frase_original'];
    
    processarTraducao($string_php, $frase_original);
}else{ header('refresh: 0; url=index.php');}
//processarTraducao('accountinfo','Home');
?>
