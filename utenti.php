<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'scuola';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Connessione fallita: ' . $conn->connect_error);
}

if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM utenti WHERE id = ?");
    $stmt->bind_param('i', $delete_id);
    if ($stmt->execute()) {
        echo "<p>Utente eliminato con successo!</p>";
    } else {
        echo "<p>Errore nell'eliminazione: " . $stmt->error . "</p>";
    }
    $stmt->close();
}

$sql = "SELECT id, nome, email FROM utenti";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Email</th><th>Azioni</th></tr>";
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>";
        echo "<a href='modifica_utente.php?id=" . $row['id'] . "'>Modifica</a> ";
        echo "<a href='utenti.php?delete=" . $row['id'] . "' onclick=\"return confirm('Sei sicuro di voler eliminare questo utente?');\">Elimina</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Nessun utente trovato</td></tr>";
}
echo "</table>";

$conn->close(); 