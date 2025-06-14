<?php
// URL: unserial_dual.php?mode=check&path=phar://evil.phar
// URL: unserial_dual.php?mode=load&data=O:8:"stdClass":1:{s:4:"test";s:4:"demo";}

$mode = $_GET['mode'] ?? '';

if ($mode === 'check') {
    $path = $_GET['path'] ?? '';
    if ($path) {
        echo "Checking path: " . htmlspecialchars($path) . "<br>";
        var_dump(is_dir($path));
    }

} elseif ($mode === 'load') {
    $raw = $_GET['data'] ?? '';
    if ($raw) {
        echo "Trying to unserialize: " . htmlspecialchars($raw) . "<br>";
        $obj = @unserialize($raw);
        var_dump($obj);
    }

} else {
    echo "Invalid mode. Use ?mode=check or ?mode=load.";
}
