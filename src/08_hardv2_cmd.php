<?php
// curl -gki 'http://localhost:8000/08_hardv2_cmd.php?debug=1&action=ping&host=127.0.0.1'

$debug=isset($_GET['debug'])? (bool)$_GET['debug']:false;
$allowed_actions = ['ping', 'traceroute'];
$action = $_GET['action'] ?? '';
$host = $_GET['host'] ?? '';
if (in_array($action, $allowed_actions)&& $host !==''){
    $cmd_map = [
        'ping' => 'ping -c 1',
        'traceroute' => 'traceroute'
    ];
    $command = $cmd_map[$action] ?? "" ;
    $safe_host =str_replace([';', '&', '|'], '', $host);
    if ($debug) {
        echo "<pre>Running: $command $safe_host</pre>";
    }
    passthru("$command $safe_host");
}
else {
    echo "Invalid action or host.";
}