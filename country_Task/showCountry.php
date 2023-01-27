<?php
    include("databaseConnection.php");

    $connection = openDatabaseConnection();

    $query = "select * from country order by country_name";

    $result = mysqli_query($connection,$query);

    echo "<table class='table table-responsive table-hover table-bordered table-striped' style='text-align: center;'>
    <tr>
        <th>Country Id</th>
        <th>Country Name</th>
        <th>Country Code</th>
        <th>Country Phone</th>
        <th colspan='2'>Actions</th>
    </tr>";

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
                echo "<a href='modifyCountry.php?id= $row[0]' class='glyphicon glyphicon-pencil' id='updateData'> Edit</a>";
            echo "</td>";
            echo "<td>";
                echo "<a href='deleteCountry.php?id=$row[0]' class='glyphicon glyphicon-trash' id='deleteData'> Delete</a>";
            echo "</td>";
        echo "</tr>";
    }
    
    echo "</table>";

    closeDatabaseConnection($connection);

?>
