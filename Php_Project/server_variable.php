<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER Variable Example</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Enter Name : <input type="text" name="name" id="" placeholder = "Enter Name">
        <br>
        <input type="submit" value="submit" name = "submit">
    </form>
    <?php
        if(isset($_REQUEST['submit']))
        {
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $name = $_POST['name'];
                if(empty($name)){
                    echo "Your name Is Empty";
                    echo "<br><br>";
                }
                else{
                    echo $name;
                    echo "<br><br>";
                }
            }
        }

        echo $_SERVER['PHP_SELF']; // Displays an File Name That Can Run On The Server
        echo "<br>";
        echo $_SERVER['SERVER_NAME']; // Displays Server Name That Can Execute The File
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST']; // Displays Http Host Address Of Server
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT']; // Displays Browser Name And Ip Address Of Device and Also Plateform
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME']; // // Displays an File Name That Can Run On The Server
        echo "<br>";
        echo $_SERVER['SERVER_ADDR'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME']; // Displays Server Name
        echo "<br>";

    ?>

</body> 
</html>
