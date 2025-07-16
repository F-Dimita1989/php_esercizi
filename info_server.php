<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$nome_file = basename(__FILE__);

echo "<h2>Informazioni Server</h2>";
echo "<ul>";
echo "<li><strong>Indirizzo IP:</strong> $ip</li>";
echo "<li><strong>User-Agent:</strong> $user_agent</li>";
echo "<li><strong>Nome file:</strong> $nome_file</li>";
echo "</ul>"; 