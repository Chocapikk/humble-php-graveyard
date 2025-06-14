<?php
//URL : 11_xss.php?name=<script>alert('1');</script>
$msg = $_GET['msg'] ?? '';
echo "You said: $msg";
