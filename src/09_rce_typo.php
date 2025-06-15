<?php
// curl -gki "http://localhost:8000/09_rce_typo.php?host=127.0.0.1:8001"

$hostname = $_GET['host'] ?? '';
$hotname = preg_replace('/[^a-zA-Z0-9: .-]/', '', $hostname);
$output = shell_exec('curl -v ' . $hostname);

header('Content-Type: text/plain');
echo $output;