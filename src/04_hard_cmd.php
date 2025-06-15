<?php 
// curl -gki "http://localhost:8000/4_hard_cmd.php?arg=+.."

function safe_exec($arg){
    $descriptor = [
        1=> ["pipe","w"],
        2=> ["pipe","w"],
    ];
    $cmd="ls". $arg;

    $process= proc_open($cmd, $descriptor, $pipes);
    if (is_resource($process)) {
        echo "<pre>". stream_get_contents($pipes[1]) ."</pre>";
        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($process);
    }
}

$arg=$_GET["arg"] ?? '';
if ($arg){
    safe_exec($arg);
}
