<?php 
// curl -gki "http://localhost:8000/2_ssrf.php?url=http://127.0.0.1:80"

$url = $_GET['url'] ?? '' ;
if ($url){
  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
  echo curl_exec($ch);
  curl_close($ch);
}

