<?php
    include("databaseConnection.php");

    $connection = openDatabaseConnection();

    $query = "select * from country";

    $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>";
                echo $row['id'];
            echo "</td>";
            echo "<td>";
                echo $row['country_name'];
            echo "</td>";
            echo "<td>";
                echo $row['code'];
            echo "</td>";
            echo "<td>";
                echo $row['phone'];
            echo "</td>";
            echo "<td>";
                echo "<a href='modifyCountry.php?id= $row[0]'>Edit</a>";
            echo "</td>";
            echo "<td>";
                echo "<a href='deleteCountry.php?id=$row[0]'>Delete</a>";
            echo "</td>";
        echo "</tr>";
    }

    closeDatabaseConnection($connection);

?>
