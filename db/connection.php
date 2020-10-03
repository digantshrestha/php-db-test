<?php

function connect(){
    $host = 'host = ec2-54-90-68-208.compute-1.amazonaws.com';
    $port = 'port = 5432';
    $dbname = 'dbname = d2j8rpppbp3jmr';
    $credentials = 'user = thrrzmyfsnrusk password = 2c4291a2107f679675be52483ea51a7150d148a635f90cb8be29dfe892404762';

    $db = pg_connect("$host $port $dbname $credentials");

    return $db;
}

function query($db, $sql){
    return pg_query($db, $sql);
}

function fetch_record($result){
    return pg_fetch_assoc($result);
}

function close($db){
    pg_close($db);
}

?>