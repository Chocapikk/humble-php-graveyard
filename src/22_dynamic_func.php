<?php 
// curl -gki "http://localhost:8000/22_dynamic_func.php?func=makeItPretty&arg=cats"

function makeItPretty($data) {
    return "*** " . $data . " ***";
}

$func = $_GET['func'] ?? '';
$arg = $_GET['arg'] ?? '';
if (function_exists($func)) {
    $result=$func($arg);
    echo "<pre>".htmlspecialchars((string)$result)."</pre>";
} else {
    echo "Function not allowed.";
}