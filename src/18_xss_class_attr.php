<?php
// curl -gki "http://localhost:8000/18_xss_class_attr.php?class=redbold"

$custom_class = $_GET['class'] ?? '';
$custom_class = preg_replace('/[<>"' . "'" . '\\/]/', '', $custom_class); // naive filter
?><!DOCTYPE html>
<html><body>
<img class=<?php echo $custom_class; ?> src="osk.png">link</img>
</body></html>