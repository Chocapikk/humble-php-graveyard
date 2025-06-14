<?php
//URL : 6_type.php?token=0e123456789
$token = $_GET['token'] ?? '';
$stored_hash = '0e987654321'; 
if ($token == $stored_hash) {
    echo "Logged in!";
} else {
    echo "Acces denied!";
}