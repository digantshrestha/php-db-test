<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
            $host = 'host = ec2-54-90-68-208.compute-1.amazonaws.com';
            $port = 'port = 5432';
            $dbname = 'dbname = d2j8rpppbp3jmr';
            $credentials = 'user = thrrzmyfsnrusk password = 2c4291a2107f679675be52483ea51a7150d148a635f90cb8be29dfe892404762';

            $db = pg_connect("$host $port $dbname $credentials");

            // if(!$db){
            //     echo "Error : Unable to open database\n";
            // }
            // else{
            //     echo "Opened databse successfully\n";
            // }

            $sql = 'SELECT * FROM courses';

            $query = pg_query($db, $sql);

            while($row = pg_fetch_assoc($query)){
                echo "<li>".$row['course_name']."</li>";
            }

            pg_close($db);
        ?>
    </div>
</body>
</html>