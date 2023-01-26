<?php
    if(isset($_POST['submit'])){
        $post = $_POST;
        $stateName = $post['stateName'];
        $countryName = $post['countryName'];
        
        include('databaseConnection.php');

        $connection = openDatabaseConnection();

        $query = "insert into state (state_name,country_id) values ('$stateName',$countryName)";

        $result = mysqli_query($connection,$query);

        if($result){
            // header('location: stateIndex.php');
        }
        else{
            echo $connection->error;
        }

        closeDatabaseConnection($connection);
        
    }
    else{
        echo $connection->error;
    }
?>
