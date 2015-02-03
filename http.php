<?php

if(!$server = stream_socket_server("tcp://0.0.0.0:2017", $err_no, $err_msg)){
   exit($err_msg);
}

echo "listen: tcp://0.0.0.0:2017\n";

while(1){
    $client = stream_socket_accept($server);
    if ($client) {
        stream_set_blocking($client, 1);
        $in = fread($client, 8192);
        $response = "HTTP/1.0 200 OK\r\n\r\nHello World!";
        fwrite($client, $response);
        fclose($client);
    }
}
