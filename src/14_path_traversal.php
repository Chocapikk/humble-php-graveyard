<?php 
// curl -gki "http://localhost:8000/14_path_traversal.php?file=osk.png"

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


