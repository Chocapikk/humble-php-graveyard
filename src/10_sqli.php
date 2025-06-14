<?php 
// URL : 10_sqli.php?user=admin' OR '1'='1
$db  = new PDO('sqlite::memory:');
$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");
$db->exec("INSERT INTO users (username, password) VALUES ('admin', 'secret')");

$user = $_GET['user'] ?? '';
$query = "SELECT * FROM users WHERE username = '$user'";
echo "<pre>Query: $query</pre>";

foreach ($db->query($query) as $row) {
    echo "<pre>User:".htmlspecialchars($row['username']). " - ". htmlspecialchars($row['password']) . "</pre>";
}