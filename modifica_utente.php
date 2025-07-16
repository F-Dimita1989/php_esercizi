<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'scuola';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Connessione fallita: ' . $conn->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    die('ID utente non valido.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    if ($nome !== '' && $email !== '') {
        $stmt = $conn->prepare("UPDATE utenti SET nome = ?, email = ? WHERE id = ?");
        $stmt->bind_param('ssi', $nome, $email, $id);
        if ($stmt->execute()) {
            echo "<p>Utente aggiornato con successo!</p>";
        } else {
            echo "<p>Errore nell'aggiornamento: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Compila tutti i campi.</p>";
    }
}

$stmt = $conn->prepare("SELECT nome, email FROM utenti WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($nome, $email);
$stmt->fetch();
$stmt->close();

?>
<form method="post" action="">
    <input type="text" name="nome" value="<?php echo htmlspecialchars($nome); ?>" placeholder="Nome">
    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Email">
    <input type="submit" value="Aggiorna utente">
</form> 