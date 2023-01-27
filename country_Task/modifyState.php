<?php
    $id = $_GET['id'];

    include('databaseConnection.php');

    if(isset($_POST['submit'])){

        $stateName = $_POST['stateName'];
        $countryId = $_POST['countryName'];

        $connection = openDatabaseConnection();

        $query = "update state set state_name = '$stateName',country_id = $countryId where sid = '$id'";

        if($result = mysqli_query($connection,$query) == true){
            header('location:stateIndex.php');
            echo $query;
        }
        else{
            echo $connection->error;
        }

        closeDatabaseConnection($connection);

    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>State Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
</head>

<body>

    <?php

        $id = $_GET['id'];
        
        $connection = openDatabaseConnection();

        $query = "select * from state where sid = '$id'";
        
        $result = mysqli_query($connection,$query);

        $data = mysqli_fetch_row($result);

        closeDatabaseConnection($connection);

    ?>

    <div class="container">
        <h1 align="center">Update State</h1>
        <form action="" class="form-horizontal" method="POST">
            <div class="form-group">
                <label for="stateName" class="col-sm-2 control-label">State Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stateName" name="stateName"
                        value="<?php echo $data[1]?>" placeholder="Enter State Name" required />
                </div>
            </div>
            <div class="form-group">
                <label for="countryName" class="col-sm-2 control-label">Select Country :</label>
                <div class="col-sm-10">
                    <select name="countryName" id="" style="padding: 9px; background:#edf2ff; border:1px solid grey">
                        <option value="" disabled>-- Select Country --</option>

                        <?php

                            $id = $_GET['id'];

                            $connection = openDatabaseConnection();

                            $query = "select distinct id,country_name from country";

                            $result = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($result)){
                                if($data[2] == $row[0]){
                                    echo "<option value='$row[0]'selected>$row[1]</option>";  
                                }
                                echo "<option value='$row[0]'>$row[1]</option>";    
                            }

                            closeDatabaseConnection($connection);

                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                    <input type="submit" value="Update State" class="btn btn-primary" name="submit" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>
