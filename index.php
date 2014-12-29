<?php

$port = 6789;
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); 
socket_connect($sock, '127.0.0.1', $port); 

//$msg = "hola mundo!";
$msg = $_GET['data'];
//socket_sendto($sock, $msg, $len, 0, '127.0.0.1', $port);
socket_write ($sock, $msg."\r\n", strlen ($msg."\r\n"));
socket_close($sock); 
echo "re pio!";
?>