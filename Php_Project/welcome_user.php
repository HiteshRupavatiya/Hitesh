<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use Seesion Variable</title>
</head>
<body>
    <?php
        session_start();
        $username = $_SESSION['username'];
        echo "Hello User : ".$username;
    ?>
</body>
</html>
