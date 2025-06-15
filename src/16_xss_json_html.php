<?php
// curl -gki "http://localhost:8000/16_xss_json_html.php?data=foo"

$data = $_GET['data'] ?? '';
echo '{"msg": "' . $data . '"}';
