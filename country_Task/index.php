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
    <div class="container">
        <h1 align="center">Country Form</h1>
        <form action="addCountry.php" class="form-horizontal" method="POST">
            <div class="form-group">
                <label for="countryName" class="col-sm-2 control-label">Country Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="countryName" name="countryName"
                        placeholder="Enter Country Name" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="countryCode" class="col-sm-2 control-label">Country Code :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="countryCode" name="countryCode"
                        placeholder="Enter Country Code" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="countryPhone" class="col-sm-2 control-label">Country Phone :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="countryPhone" name="countryPhone"
                        placeholder="Enter Country Phone" required/>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                    <input type="submit" value="Add Country" class="btn btn-primary" name="submit" id="submit"/>
                </div>
            </div>
        </form>
        <br />
        <?php
            include('showCountry.php');
        ?>
    </div>
</body>

</html>
