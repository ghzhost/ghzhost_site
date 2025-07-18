<?php

use WHMCS\Session;
use WHMCS\Database\Capsule;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function adjustCurrencyAndLanguage($vars){
    session_start();
    // Obtenha o subdomínio ISO-2
    $host = $_SERVER['HTTP_HOST'];
    $subdomain = explode('.', $host)[0];

    // Mapeamento do subdomínio para a moeda e a linguagem
  include 'contriesdomains.php';

    // Verifique se o subdomínio existe no mapeamento
    if (isset($map[$subdomain])) {
        // Ajuste a moeda
        $currencyCode = $map[$subdomain]['currency'];
        $currency = Capsule::table('tblcurrencies')->where('code', $currencyCode)->first();
        if ($currency) {
            $_SESSION['currency'] = $currency->id;
        }

        if(!isset($_SESSION['Language'])){
        // Ajuste a linguagem
        $language = $map[$subdomain]['language'];
        $_SESSION['Language'] = $language;
        ob_clean();
        header('location: '.$_SERVER['REQUEST_URI']);
        die();
    }
}
}

add_hook('ClientAreaPage', 1, 'adjustCurrencyAndLanguage');
