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
        <?php for($i=1; $i<=10; $i++):?>
            <h1><?php echo "Hello World"; ?></h1>
        <?php endfor;?>
    </div>
</body>
</html>