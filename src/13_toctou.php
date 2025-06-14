<?php
// URL : 13_toctou.php?url=http://127.0.0.1/resource 
$url = $_GET['url'] ?? '';


function is_allowed($url){
    $parsed = parse_url($url);
    if (!$parsed){
        return false;
    }
    return !in_array($parsed['host'], ['127.0.0.1', 'localhost']);
}

if ($url && is_allowed($url)) {
    // Attempt to block file:// but only replaces once
    echo "Fetching: $url<br>";
    $data = file_get_contents($url);
    echo "<pre>" . htmlspecialchars($data) . "</pre>";
} else {
    echo "Blocked";
}
