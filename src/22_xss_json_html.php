<?php
// curl -gki "http://localhost:8000/22_xss_json_html.php?data=foo"

$data = $_GET['data'] ?? '';
echo '{"msg": "' . $data . '"}';
