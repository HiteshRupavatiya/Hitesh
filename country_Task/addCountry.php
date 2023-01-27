<?php
    if(isset($_POST['submit'])){
        $post = $_POST;
        $countryName = $post['countryName'];
        $countryCode = $post['countryCode'];
        $countryPhone = $post['countryPhone'];
        
        include('databaseConnection.php');

        $connection = openDatabaseConnection();

        $query = "insert into country (country_name,code,phone) values ('$countryName','$countryCode',$countryPhone)";

        $result = mysqli_query($connection,$query);

        if($result){
            header('location: index.php');
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