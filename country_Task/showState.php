<?php

    $connection = mysqli_connect("localhost","root","root","information");

    $query = "select s.sid,s.state_name,c.country_name,c.code,c.phone,s.country_id from country c inner join state s on(c.id = s.country_id) order by s.state_name";

    $result = mysqli_query($connection,$query);

    $table =  "<table class='table table-responsive table-hover table-bordered table-striped' style='text-align: center;'>

    <tr>
        <th>State Id</th>
        <th>State Name</th>
        <th>Country Name</th>
        <th>Country Code</th>
        <th>Country Phone</th>
        <th>Country Id</th>
        <th colspan='2'>Actions</th>
    </tr>";

    while($data = mysqli_fetch_array($result)){
        $table .= "<tr>
         <td> $data[0] </td>
         <td> $data[1] </td>
         <td> $data[2] </td>
         <td> $data[3] </td>
         <td> $data[4] </td>
         <td> $data[5] </td>
         <td> <button class='btn btn-primary glyphicon glyphicon-pencil' id='updateData' onclick='updateState($data[0])'> Edit</button> </td>
         <td> <button class='btn btn-danger glyphicon glyphicon-trash' id='deleteData' onclick='deleteState($data[0])'> Delete</button> </td>
         </tr>";
    }

    $table .= "</table>";

    echo $table;

    mysqli_close($connection);

?>
