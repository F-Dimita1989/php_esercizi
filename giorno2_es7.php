<?php
$parole = ['Musica', 'Ciao', 'Videogioco', 'Fumetti', 'Film', 'No'];

$conta = 0;
foreach ($parole as $parola) {
    if (strlen($parola) > 5) {
        $conta++;
    }
}

echo "Parole con più di 5 caratteri: " . $conta;
?>