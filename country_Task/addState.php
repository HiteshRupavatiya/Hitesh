<?php
        $stateName = $_POST['stateName'];
        $countryName = $_POST['countryName'];
        
        include('databaseConnection.php');

        $connection = openDatabaseConnection();

        $query = "insert into state (state_name,country_id) values ('$stateName',$countryName)";

        $result = mysqli_query($connection,$query);

        closeDatabaseConnection($connection);

?>
