<?php 
// curl -gki "http://localhost:8000/19_replace_bug.php?url=http://127.0.0.1:8001/"

$url = $_GET['url'] ?? '';

if (strpos($url, 'file://') !== false) {
    $url = str_replace('file://', '', $url);
}

if (str_starts_with($url, '/')) {
    die("no abs file!");
}
if (str_starts_with($url, '.')) {
    return die("no path trav!");
}

echo "Trying to open: $url<br>";

$content = file_get_contents($url);
echo "<pre>" . htmlspecialchars($content) . "</pre>";
