<?php 
//url : 1_file_read.php?file=../../../etc/passwd


$filename=$_GET['file']??'';
if ($filename){
  echo "<pre>". htmlspecialchars(file_get_contents($filename))."</pre>";
}

