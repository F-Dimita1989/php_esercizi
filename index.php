<form action="saluto.php" method="post">
    <input type="text" name="nome" placeholder="Inserisci il tuo nome">
    <input type="text" name="cognome" placeholder="Inserisci il tuo cognome">
    <input type="text" name="data" placeholder="Inserisci la tua data di nascita">
    <input type="submit" value="Invia">
</form>

<form action="converti.php" method="post">
    <input type="number" step="0.01" name="euro" placeholder="Inserisci importo in euro">
    <input type="submit" value="Converti in dollari">
</form>

<form method="get" action="">
    <input type="text" name="parola" placeholder="Cerca una parola">
    <input type="submit" value="Cerca">
</form>
<?php
if (isset($_GET['parola']) && $_GET['parola'] !== '') {
    $termine = htmlspecialchars($_GET['parola']);
    echo "Hai cercato: $termine";
}
?>

<a href="info_server.php">Mostra informazioni server</a>
