<?php
// curl -gki "http://localhost:8000/23_rce_typo.php?host=offenskill.com"

$hostname = $_GET['host'] ?? '';
$hotname = preg_replace('/[^a-zA-Z0-9 .-]/', '', $hostname);
$output = shell_exec('curl -v ' . $hostname);

header('Content-Type: text/plain');
echo $output; 