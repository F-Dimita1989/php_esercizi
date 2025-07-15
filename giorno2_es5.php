<?php
$studenti = ['Luca' => 30, 'Anna' => 10, 'Marco' => 22, 'Giulia' => 17, 'Francesca' => 18];

foreach ($studenti as $nome => $voti) {
    if ($voti >= 18) {
        echo $nome . " ha superato l'esame con " . $voti . " voti";
    } else {
        echo $nome . " non ha superato l'esame con " . $voti . " voti";
    }
}
?>