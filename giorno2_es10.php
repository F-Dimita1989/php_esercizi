<?php
$parola = "Programmazione";
$caratteri = str_split($parola);
$vocali = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

$conteggioVocali = 0;
foreach ($caratteri as $char) {
    if (in_array($char, $vocali)) {
        $conteggioVocali++;
    }
}

echo "La parola '$parola' contiene $conteggioVocali vocali.";
?>