<?php
    function openDatabaseConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $databaseName = "information";

        $connection = mysqli_connect($servername,$username,$password,$databaseName);
        
        if($connection->connect_error){
            die("Connection Error Occured..." .$connection->connect_error);
        }
        else{
            return $connection;
        }
    }

    function closeDatabaseConnection($connection){
        mysqli_close($connection);
    }

?>
