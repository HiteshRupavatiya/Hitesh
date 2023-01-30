<?php
    include('databaseConnection.php');
    
    $id = $_POST['id'];

    $connection = openDatabaseConnection();

    $query = "delete from state where sid = $id";

    $result = mysqli_query($connection,$query);

    closeDatabaseConnection($connection);
    
?>
