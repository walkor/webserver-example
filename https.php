<?php

$context = stream_context_create(array('ssl' =>array( 
        'local_cert' =>'./https.pem',
    )));

if(!$server = stream_socket_server("ssl://0.0.0.0:2016", $err_no, $err_msg, STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context)){
   exit($err_msg);
}

echo "listen ssl://0.0.0.0:2016\n";

while(1){
    $client = stream_socket_accept($server);
    if ($client) {
        stream_set_blocking($client, 0);
        $in = '';
        while($ret = fread($client, 8192)) $in .= $ret;
        $response = "HTTP/1.0 200 OK\r\n\r\nHello";
        fwrite($client, $response);
        fclose($client);
    }
}
