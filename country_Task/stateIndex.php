<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>State Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
</head>

<body>
    <div class="container">
        <h1 align="center">State Form</h1>
        <form action="addState.php" class="form-horizontal" method="POST">
            <div class="form-group">
                <label for="stateName" class="col-sm-2 control-label">State Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stateName" name="stateName"
                        placeholder="Enter State Name" required />
                </div>
            </div>
            <div class="form-group">
                <label for="countryName" class="col-sm-2 control-label">Select Country :</label>
                <div class='col-sm-7'>

                    <?php

                      include('databaseConnection.php');
                              
                      $connection = openDatabaseConnection();

                      $query = "select id,country_name from country";

                      $result = mysqli_query($connection,$query);

                      echo "<select name='countryName' style='padding: 9px; background: #edf2ff; border:1px solid grey;' required>";
                      echo "<option value='' disabled selected>-- Select Country -- </option>";

                      while($row = mysqli_fetch_row($result)){
                          echo "<option value='$row[0]'> $row[1] </option>";
                      }
                              
                      echo "</select>";

                      closeDatabaseConnection($connection);

                  ?>

                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                    <input type="submit" value="Add State" class="btn btn-primary btn-inline" name="submit">
                </div>
            </div>
        </form>
        <br />
        <?php
            include_once('showState.php');
        ?>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>

</body>

</html>
