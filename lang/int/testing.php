<?php
require_once 'lib/googletranslate.php';

$text = "Hello, how are you today?";
$source_language = "en";
$target_language = "pt";

$translated_text = translate($text, $source_language, $target_language);

echo $translated_text; // Outputs: Olá, como você está hoje?
?>