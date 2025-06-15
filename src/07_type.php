<?php 
// curl -gki "http://localhost:8000/07_type.php?token=0e987654321"

$token = $_GET['token'] ?? '';
$stored_hash = '0e987654321'; 
if ($token == $stored_hash) {
    echo "Logged in!";
} else {
    echo "Acces denied!";
}