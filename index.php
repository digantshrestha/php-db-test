<?php include_once('shared/header.php')?>
    <?php
        // if(!$db){
        //     echo "Error : Unable to open database\n";
        // }
        // else{
        //     echo "Opened databse successfully\n";
        // }

        $db = connect();
        $sql = 'SELECT * FROM courses';

        $query = query($db, $sql);

        while($row = fetch_record($query)){
            echo "<li>".$row['course_name']."</li>";
        }

        close($db);
    ?>
<?php include_once('shared/footer.php')?>
    