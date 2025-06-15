<?php 
// curl -gki "http://localhost:8000/11_xss.php?msg=<script>alert('1');</script>"

$msg = $_GET['msg'] ?? '';
echo "You said: $msg";
