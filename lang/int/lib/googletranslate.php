<?php
function translate($text, $source_language, $target_language, $cache_dir = 'cache') {
    // Cria o diretório de cache se não existir
    if (!is_dir($cache_dir)) {
        mkdir($cache_dir, 0755, true);
    }

    // Gera um nome de arquivo de cache com base no texto e nos idiomas
    $cache_file = "$cache_dir/" . md5("$text-$source_language-$target_language");

    // Verifica se o cache existe e se é válido
    if (file_exists($cache_file)) {
        // Lê o resultado do cache
        $translated_text = file_get_contents($cache_file);
    } else {
        // URL da API do Google Translate sem chave de API sem limites de requisições
        $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=$source_language&tl=$target_language&dt=t&q=" . urlencode($text);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if ($response === false) {
            echo "Error: " . curl_error($curl);
            return null;
        }

        $result = json_decode($response, true);
        $translated_text = $result[0][0][0];

        // Salva o resultado no cache
        file_put_contents($cache_file, $translated_text);

        curl_close($curl);
    }
// Retorno de resultado traduzido
    return $translated_text;
}
