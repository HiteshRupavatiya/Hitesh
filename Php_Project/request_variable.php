<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_REQUEST Variable Example</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Enter name : <input type="text" name="name" id="">
        <br>
        Enter Age : <input type="number" name="age" id="">
        <br>
        <input type="submit" value="Submit" name = "submit">
    </form>
    <?php

        if(isset($_REQUEST['submit'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            if(empty($name) && empty($age)){
                echo "Please Enter Your Name And Age";
                echo "<br>";
            }
            else if(empty($name) || empty($age)){
                echo "Please Enter Your Name And Age";
                echo "<br>";
            }
            else{
                echo "Your Name Is : $name and Your Age Is : $age";
                echo "<br>";
            }
        }
        else{
            echo "Please Click The Submit Button";
        }

    ?>

</body>
</html>
