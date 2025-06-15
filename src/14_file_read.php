<?php
// curl -gki "http://localhost:8000/14_file_read.php?file=osk.png"

$filename=$_GET['file']??'';
if ($filename){
  file_get_contents($filename); // Can you still read though?
}

