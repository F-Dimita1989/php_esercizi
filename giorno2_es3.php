<?php
$testo = "PHP è divertente e potente";
$parole = explode(" ", $testo);  

foreach ($parole as $parola) {
    echo $parola . "\n";  
}
?>