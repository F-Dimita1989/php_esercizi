<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'scuola';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Connessione fallita: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    if ($nome !== '' && $email !== '') {
        $stmt = $conn->prepare("INSERT INTO utenti (nome, email) VALUES (?, ?)");
        $stmt->bind_param('ss', $nome, $email);
        if ($stmt->execute()) {
            echo "<p>Utente aggiunto con successo!</p>";
        } else {
            echo "<p>Errore nell'inserimento: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Compila tutti i campi.</p>";
    }
}
?>
<form method="post" action="">
    <input type="text" name="nome" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Aggiungi utente">
</form> 