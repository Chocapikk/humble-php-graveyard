<?php 
// curl -gki "http://localhost:8000/16_dynamic_class.php?class=DateTime&arg=now"
// cHJpbnRfcihnZXRfZGVjbGFyZWRfY2xhc3NlcygpKTsgY3VybCAtZ2tpICJodHRwOi8vbG9jYWxob3N0OjgwMDAvMTZfZHluYW1pY19jbGFzcy5waHA/Y2xhc3M9U3BsRmlsZU9iamVjdCZhcmc9aHR0cDovLzE3Mi4xNy4wLjE6OTAwMCI=

$class = $_GET['class'] ?? '';
$arg   = $_GET['arg'] ?? '';

if (class_exists($class)) {
    $obj = new $class($arg);
    echo "<pre>";
    var_dump($obj);
    echo "</pre>";
} else {
    echo "Class not found.";
}
