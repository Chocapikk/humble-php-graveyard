<?php 
// curl -gki "http://localhost:8000/15_xss.php?msg=<script>alert('1');</script>"

$msg = $_GET['msg'] ?? '';
echo "You said: $msg";
