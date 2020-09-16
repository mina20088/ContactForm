<?php
$Host = "localhost";
$User = "root";
$Password = '22058149';
$Database = "contactform";
$Connection = new mysqli($Host,$User,$Password,$Database);

if($Connection->connect_error){
    echo "Error:Connection Cant be Stablished". PHP_EOL;
    echo "Debugging errno: " . $Connection->connect_errno . PHP_EOL;
    echo "Debugging error: " . $Connection->connect_error . PHP_EOL;
}else{
    if($Connection->select_db('contactform')){
        echo "Success: A proper connection to MySQL was made! The {$Database} database is great." . PHP_EOL;
        echo "Host information: " . $Connection->host_info . PHP_EOL;
    }
}

function ConnectionSuccess(){
    global $Connection;
    $Status = false;
    $ConnectionStatus = $Connection->get_connection_stats();
    if($ConnectionStatus['connect_success']){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}

