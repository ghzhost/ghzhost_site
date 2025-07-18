<?php

function traduzirTexto($texto, $idiomaOrigem, $idiomaDestino) {
    // URL da API do Google Translate sem chave de API
    $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=$idiomaOrigem&tl=$idiomaDestino&dt=t&q=" . urlencode($texto);
    
    // Inicializa cURL
    $curl = curl_init();

    // Configura as opções da requisição cURL
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    // Executa a requisição cURL e obtém a resposta
    $response = curl_exec($curl);
    $err = curl_error($curl);

    // Fecha a conexão cURL
    curl_close($curl);

    if ($err) {
        return "Erro na requisição: " . $err;
    } else {
        // O resultado vem como JSON, então precisamos decodificar
        $resultado = json_decode($response);

        // Monta o texto traduzido a partir do JSON retornado
        $traducao = "";
        foreach ($resultado[0] as $parte) {
            $traducao .= $parte[0];
        }

        return $traducao;
    }
}

// Exemplo de uso:
$texto = "Hello, how are you?";
$idiomaOrigem = "en"; // Inglês
$idiomaDestino = "pt"; // Português

$textoTraduzido = traduzirTexto($texto, $idiomaOrigem, $idiomaDestino);
echo "Texto original: $texto <br>";
echo "Texto traduzido: $textoTraduzido";
?>