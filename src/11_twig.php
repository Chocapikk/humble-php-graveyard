<?php 
// curl -gki 'http://localhost:8000/9_twig.php?tpl={{$name}}'

$tpl = $_GET['tpl'] ?? '{{name}}';
$data = ['name' => 'Guest'];

// Fake "rendering" logic
$template = preg_replace_callback('/{{(\$.*?)}}/', function ($m) use ($data) {
    extract($data);
    return eval("return {$m[1]};");
}, $tpl);

echo $template;
