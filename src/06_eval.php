<?php
// curl -gki 'http://localhost:8000/06_eval.php?name=<?=`id`;?>'

$name=$_GET["name"] ?? 'Guest';
$template="Hello $name!";
eval("?>$template");

// Totaly safe secret : i_like_gnocchi