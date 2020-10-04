<?php
    $host = 'host = ec2-54-90-68-208.compute-1.amazonaws.com';
    $port = 'port = 5432';
    $dbname = 'dbname = d2j8rpppbp3jmr';
    $credentials = 'user = thrrzmyfsnrusk password = 2c4291a2107f679675be52483ea51a7150d148a635f90cb8be29dfe892404762';

    $db = pg_connect("$host $port $dbname $credentials");

    $sql = 'INSERT INTO enquiries 
    (first_name, last_name, email, contact_no, course_id, message, status)
    VALUES ($1, $2, $3, $4, $5, $6, $7)';

    pg_prepare($db, "insert-query", $sql);
    $result = pg_execute($db, "insert-query", ['Anish', 'Pokhrel',
                                     'anish@gmail.com', '9898988', 1,
                                     'NA', true]);

    echo $result;                                     
?>