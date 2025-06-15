<?php
// curl -gki "http://localhost:8000/13_sqli_interpolation.php?username=admin&password=adminpass"

$db = new PDO('sqlite::memory:');
$db->exec('CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)');
$db->exec("INSERT INTO users (username, password) VALUES ('admin', 'adminpass')");

$username = $_GET['username'] ?? '';
$password = $_GET['password'] ?? '';
$table = $_GET['table'] ?? 'users';

$sql = "SELECT * FROM '$table' WHERE username = :username AND password = :password";
$stmt = $db->prepare($sql); // Secure: use prepared statements
$stmt->execute([':username' => $username, ':password' => $password]);
$user = $stmt->fetch();

if ($user) {
    echo "Welcome, " . htmlspecialchars($user['username']);
} else {
    echo "Invalid credentials.";
} 