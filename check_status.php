<?php
header('Content-Type: application/json');

function getRedirectStatus($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $data = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $http_code;
}
// URL do recurso para verificar o status
$host = $_SERVER['HTTP_HOST'];
$url = 'https://'. $host . '/index.php'; // Substitua pela URL real do status
$http_code = getRedirectStatus($url);

// Se o código de status for 301 ou 302, isso indica redirecionamento
$isRedirect = ($http_code == 301 || $http_code == 302);

echo json_encode(['redirect' => $isRedirect]);
?>