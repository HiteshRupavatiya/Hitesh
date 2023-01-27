<?php
    $id = $_GET['id'];
    
    include('databaseConnection.php');

    if(isset($_POST['submit'])){
        $countryName = $_POST['countryName'];
        $countryCode = $_POST['countryCode'];
        $countryPhone = $_POST['countryPhone'];

        $connection = openDatabaseConnection();

        $query = "update country set country_name = '$countryName',code = '$countryCode',phone = $countryPhone where id = '$id'";

        if($result = mysqli_query($connection,$query) == true){
            header('location:index.php');
        }
        else{
            echo $connection->error;
        }

    }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Country Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
</head>

<body>

    <?php

        $id = $_GET['id'];
        
        $connection = openDatabaseConnection();

        $query = "select country_name,code,phone from country where id = '$id'";
        
        $result = mysqli_query($connection,$query);

        $data = mysqli_fetch_row($result);

        closeDatabaseConnection($connection);

    ?>

    <div class="container">
        <h1 style="padding-bottom: 10px; text-align: center">Update Country</h1>
        <form action="" class="form-horizontal" method="POST">
            <div class="form-group">
                <label for="countryName" class="col-sm-2 control-label">Country Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="countryName" name="countryName" value="<?php echo $data[0]?>"
                        placeholder="Enter Country Name" required />
                </div>
            </div>
            <div class="form-group">
                <label for="countryCode" class="col-sm-2 control-label">Country Code :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="countryCode" name="countryCode" value="<?php echo $data[1]?>"
                        placeholder="Enter Country Code" required />
                </div>
            </div>
            <div class="form-group">
                <label for="countryPhone" class="col-sm-2 control-label">Country Phone :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="countryPhone" name="countryPhone" value="<?php echo $data[2]?>"
                        placeholder="Enter Country Phone" required />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Update Country" class="btn btn-primary" name="submit" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>
