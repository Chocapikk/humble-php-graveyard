<?php
// curl -gki "http://localhost:8000/01_file_read.php?file=osk.png"

$filename=$_GET['file']??'';
if ($filename){
  echo "<pre>". htmlspecialchars(file_get_contents($filename))."</pre>";
}

