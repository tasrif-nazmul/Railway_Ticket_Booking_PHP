<?php
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>View Ticket</title>
    <link rel="stylesheet" href="../assects/css/tableStyle.css">
</head>
<body>
<center>
    <form method="post">
        
            <?php
            $username = $_COOKIE['username'];
    $con = mysqli_connect('localhost', 'root','','webtech');
    $sql = "select * from ticketbook where username='$username'";
    $result = mysqli_query($con, $sql);
    // $data = mysqli_fetch_assoc($result);
    // print_r($data);

    echo "<table> 
            
            <tr>
                <th>Ticket Number</th>
                <th>Train Name</th>
                <th>From Station</th>
                <th>Start Time</th>
                <th>To station</th>
                <th>Arrival Time</th>
                <th>Date of Journey</th>
                <th>Print</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['id']}</td>        
                    <td>{$data['trainName']}</td>        
                    <td>{$data['fromStation']}</td>
                    <td>{$data['startTime']}</td>        
                    <td>{$data['toStation']}</td>   
                    <td>{$data['arrivalTime']}</td>   
                    <td>{$data['dateOfJourney']}</td>
                    <td> <a href ='print.php?print={$data['id']}'>Print Ticket</a></td>       
                </tr>";
    }

    echo "</table>";
?>
           
</center>
</body>
</html>