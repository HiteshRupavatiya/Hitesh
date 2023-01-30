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
        <form action="addCountry.php" class="form-horizontal" method="POST" name="countryForm" onsubmit="return (validate());">
            <div class="form-group">
                <label for="countryName" class="col-sm-2 control-label">Country Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="countryName" name="countryName"
                        placeholder="Enter Country Name" required />
                </div>
            </div>
            <div class="form-group">
                <label for="countryCode" class="col-sm-2 control-label">Country Code :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="countryCode" name="countryCode"
                        placeholder="Enter Country Code" required maximum="2"/>
                </div>
            </div>
            <div class="form-group">
                <label for="countryPhone" class="col-sm-2 control-label">Country Phone :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="countryPhone" name="countryPhone"
                        placeholder="Enter Country Phone" required maximum="5"/>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                    <input type="submit" value="Add Country" class="btn btn-primary" name="submit" id="submit" />
                </div>
            </div>
        </form>
        <br />
        <?php
            include('showCountry.php');
        ?>
    </div>
    <script>
    function validateData() {

        var expression = new RegExp("[^0-9]");
        var expression1 = new RegExp("[^a-z|A-Z]");

        if (document.countryForm.countryName.value == "" || document.countryForm.countryName.value == null) {
            alert("Please Fill Country Name");
            document.stateForm.stateName.focus();
            return false;
        }
        if (!(document.countryForm.countryName.value.length <= 20)) {
            alert("Country Name Must Be Less Than 20 Characters");
            document.stateForm.stateName.focus();
            return false;
        }
        if (document.countryForm.countryCode.value == "" || document.countryForm.countryCode.value == null) {
            alert("Please Fill Country Code");
            document.stateForm.countryName.focus();
            return false;
        }
        if (!(document.countryForm.countryCode.value.length <=5)) {
            alert("Please Fill Country Code With Maximum 5 Digit Numbers");
            document.stateForm.countryName.focus();
            return false;
        }
    }

    </script>
</body>

</html>