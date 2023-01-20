<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$GLOBALS Variable Example</title>
</head>
<body>
    <?php
    
        $message = "hello world!";
        $person = "abc";
        $number = 10;
        $number1 = 20;

        function accessGlobalVariable(){
            $GLOBALS['number'] = $GLOBALS['number1'] * $GLOBALS['number'];
            print $GLOBALS['message'];
        }

        accessGlobalVariable();
        echo "<br>";
        print $GLOBALS['number'];

    ?>

</body>
</html>
