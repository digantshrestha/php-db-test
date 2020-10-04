<?php include_once('shared/header.php')?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $db = connect();

        $sql = 'INSERT INTO enquiries 
        (first_name, last_name, email, contact_no, course_id, message, status)
        VALUES ($1, $2, $3, $4, $5, $6, $7)';

        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $contact_no = htmlspecialchars($_POST['contact_no']);
        $course_id = htmlspecialchars($_POST['course_id']);
        $message = htmlspecialchars($_POST['message']);
        $status = 'false';

        $params = [
            $first_name, 
            $last_name, 
            $email, 
            $contact_no, 
            $course_id, 
            $message, 
            $status
        ];

        $result = execute($db, $sql, $params);
        close($db);
    }

?>

    <div class="page-header">
        <h1>Enquiry Form</h1>
    </div>

    <form action="" method="POST">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" required="required">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required="required">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="contact_no">Contact No.</label>
                    <input type="text" name="contact_no" class="form-control" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="course_id">Interested Course</label>
                    <select name="course_id" class="form-control" required="required">
                        <option value="">Select Interested Course</option>
                        <?php
                            $db = connect();
                            $sql = 'SELECT * FROM courses';
                    
                            $query = query($db, $sql);
                    
                            while($row = fetch_record($query)){
                        ?>
                            <option value="<?=$row['id']?>"><?=$row['course_name']?></option>
                        <?php
                            }
                    
                            close($db);
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Prefered Timing</label>
                    <input type="text" name="timing" class="form-control" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="message">Messege (If Any)</label>
                    <textarea name="message" class="form-control" style="height:150px"></textarea>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary" class="submit">Send</button>
    </form>

<?php include_once('shared/footer.php')?>