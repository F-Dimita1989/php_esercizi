<?php
if (isset($_POST['euro'])) {
    $euro = floatval($_POST['euro']);
    $tasso = 1.10;
    $dollari = $euro * $tasso;
    echo "<p>$euro &euro; corrispondono a " . number_format($dollari, 2) . " $</p>";
} else {
    echo "<p>Nessun importo inserito.</p>";
} 