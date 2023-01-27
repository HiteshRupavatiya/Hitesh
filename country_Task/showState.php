<?php

    $connection = mysqli_connect("localhost","root","root","information");

    $query = "select s.sid,s.state_name,c.country_name,c.code,c.phone,s.country_id from country c inner join state s on(c.id = s.country_id) order by s.state_name;";

    $result = mysqli_query($connection,$query);

    echo "<table class='table table-responsive table-hover table-bordered table-striped' style='text-align: center;'>
    <tr>
        <th>State Id</th>
        <th>State Name</th>
        <th>Country Name</th>
        <th>Country Code</th>
        <th>Country Phone</th>
        <th>Country Id</th>
        <th colspan='2'>Actions</th>
    </tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>";
                echo $row['sid'];
            echo "</td>";
            echo "<td>";
                echo $row['state_name'];
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
                echo $row['country_id'];
            echo "</td>";
            echo "<td>";
                echo "<a href='modifyState.php?id= $row[0]' class='glyphicon glyphicon-pencil' id='showData'> Edit</a>";
            echo "</td>";
            echo "<td>";
                echo "<a href='deleteState.php?id= $row[0]' class='glyphicon glyphicon-trash' id='updateData'> Delete</a>";
            echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($connection);

?>
