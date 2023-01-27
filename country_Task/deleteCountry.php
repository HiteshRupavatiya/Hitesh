<?php
    include('databaseConnection.php');

    $get = $_GET;
    $id = $get['id'];

    $connection = openDatabaseConnection();

    $query = "delete from country where id = '$id'";

    $result = mysqli_query($connection,$query);

    if($result){
        header('location:index.php');
    }
    else{
        echo $result->error;
    }

?>