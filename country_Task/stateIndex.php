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
        <form class="form-horizontal" name="stateForm" id="stateForm">
            <div class="form-group">
                <label for="stateName" class="col-sm-2 control-label">State Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stateName" name="stateName"
                        placeholder="Enter State Name" required />
                </div>
            </div>
            <div class="form-group">
                <label for="countryName" class="col-sm-2 control-label">Country :</label>
                <div class='col-sm-7'>
                    <select name='countryName' style='padding: 9px; background: #edf2ff; border:1px solid grey;'
                        id='countryName' required>
                        <option value='' disabled selected>-- Select Country -- </option>

                        <?php

                      include('databaseConnection.php');
                              
                      $connection = openDatabaseConnection();

                      $query = "select id,country_name from country";

                      $result = mysqli_query($connection,$query);

                      while($row = mysqli_fetch_row($result)){
                          echo "<option value='$row[0]'> $row[1] </option>";
                      }

                      closeDatabaseConnection($connection);

                    ?>

                    </select>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-6 col-sm-10">
                    <input type="hidden" name="update" id="update">
                    <input type="submit" value="Add State" class="btn btn-primary btn-inline" name="submit" id="submit">
                </div>
            </div>
        </form>
        <br />
        <div id="table">

        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>

    <script>

    function validateData() {

        if (document.stateForm.stateName.value == "" || document.stateForm.stateName.value == null) {
            alert("Please Fill State Name");
            document.stateForm.stateName.focus();
            return false;
        }
        if (document.stateForm.countryName.value == "" || document.stateForm.countryName.value == null) {
            alert("Please Select Country Name");
            document.stateForm.countryName.focus();
            return false;
        }
        if (!isNaN(document.stateForm.stateName.value)) {
            alert("Please Fill Only Characters In The State Name");
            return false;
        }
    }

    $(document).ready(function() {
        loadData();
    });

    function loadData() {

        $.ajax({
            url: 'showState.php',
            type: 'POST',
            success: function(data) {
                $('#table').html(data);
            }
        });
    }

    $("#stateForm").on("submit", function(e) {

        e.preventDefault();

        var stateName = $('#stateName').val();
        var countryName = $('#countryName').val();

        $.ajax({
            url : 'addState.php',
            type : 'POST',
            data : {
                stateName : stateName,
                countryName : countryName
            },
            success : function(data){
                console.log(data);
                if(data != null){
                    loadData();
                }
                else{
                    alert("Cannot Inserted !!");
                }
            } 
        });
    });

    function deleteState(dId){

        if(confirm("Are You Sure You Want To Delete Data !!!") == true){
            $.ajax({
                url : 'deleteState.php',
                type : 'POST',
                data : {
                    id : dId
                },
                success : function(data){
                    console.log(data);
                    loadData();
                }
            });
        }
    }

    function updateState(dId){

        $('#update').val(dId);

        $.ajax({
            url : 'modifyState.php',
            type : 'POST',
            data : {
                did : dId
            },
            success : function(data){
                var id = JSON.parse(data);
                $('#stateName').val(id.stateName);
                $('countryName').val(id.countryName);
            }
        });

        $('#update').on('click',function(){
            
        });
    }


    </script>

</body>

</html>