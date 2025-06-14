<?php
// URL: 12_replace_bug.php?url=file://file://etc/passwd
$url = $_GET['url'] ?? '';

if (strpos($url, 'file://') !== false) {
    // Attempt to block file:// but only replaces once
    $url = str_replace('file://', '', $url); // NOT recursive!
}

echo "Trying to open: $url<br>";

$content = @file_get_contents($url);
echo "<pre>" . htmlspecialchars($content) . "</pre>";
