<?php
// URL: 9_twig.php?tpl={{`id`}}
// Simulated Twig-like parser with dangerous eval()

$tpl = $_GET['tpl'] ?? '{{name}}';
$data = ['name' => 'Guest'];

// Fake "rendering" logic
$template = preg_replace_callback('/{{(.*?)}}/', function ($m) use ($data) {
    // No escaping or sandboxing — dangerous!
    extract($data);
    return eval("return {$m[1]};");
}, $tpl);

echo $template;
