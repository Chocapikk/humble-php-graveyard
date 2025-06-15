<?php 
// curl -gki "http://localhost:8000/12_sqli.php?user=admin&password=secret"

$db  = new PDO('sqlite::memory:');
$db->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");
$db->exec("INSERT INTO users (username, password) VALUES ('admin', '5ebe2294ecd0e0f08eab7690d2a6ee69')");

$user = $_GET['user'] ?? '';
$password = md5($_GET['password'] ?? '');
$query = "SELECT * FROM users WHERE username = '$user' AND password='$password'";
echo "<pre>Query: $query</pre>";

foreach ($db->query($query) as $row) {
    echo "\n<pre>Welcome back, ".htmlspecialchars($row['username']). "!</pre>";
}