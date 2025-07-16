<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $data_nascita = $_POST["data"];
    $anno_nascita = intval(substr($data_nascita, 0, 4));
    $anno_corrente = date("Y");
    $eta = $anno_corrente - $anno_nascita;

    echo "Ciao $nome $cognome, hai $eta anni.";
}
?>
