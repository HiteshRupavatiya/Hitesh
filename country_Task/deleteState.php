<?php
    include('databaseConnection.php');
    
    $id = $_GET['id'];

    $connection = openDatabaseConnection();

    $query = "delete from state where sid = $id";

    $result = mysqli_query($connection,$query);

    if($result){
        header('location:stateIndex.php');
    }
    else{
        $connection->error;
    }

    closeDatabaseConnection($connection);
    
?>