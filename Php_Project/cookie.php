<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_COOKIE Variable Example</title>
</head>
<body>
    <?php
        setcookie("abc","hello from cookies",time() + 3600,"/");
    ?>

    <?php
        if(isset($_COOKIE['abc'])){
            echo "Cookie Name Is : ".htmlspecialchars($_COOKIE['abc']);
        }
        else{
            echo "Cookie Doesn't set ";
        }
    ?>

</body>
</html>
