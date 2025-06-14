<?php 
// URL: 14_path_traversal.php?file=..%2F..%2Fetc%2Fpasswd
$file=$_GET['file'] ?? '';
if (strpos($file,'../')!== false){
  die("Path traversal detected");
}

$decoded = urldecode($file);

if (file_exists($decoded)){
  echo "<pre>" . htmlspecialchars(file_get_contents($decoded)) . "</pre>";
} else {
  echo "File not found";
}


