<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>View Schedule</title>
    <link rel="stylesheet" href="../../assects/css/tableStyle.css">
</head>
<body>
<center>
    <form method="post">
        
            <?php
    $con = mysqli_connect('localhost', 'root','','webtech');
    $sql = "select * from train";
    $result = mysqli_query($con, $sql);
    // $data = mysqli_fetch_assoc($result);
    // print_r($data);

    echo "<table border=1> 
            
            <tr>
                <th>Train Name</th>
                <th>From Station</th>
                <th>Start Time</th>
                <th>To station</th>
                <th>Arrival Time</th>
                <th>Date Of Journey</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['trainName']}</td>        
                    <td>{$data['fromStation']}</td>       
                    <td>{$data['startTime']}</td>       
                    <td>{$data['toStation']}</td>  
                    <td>{$data['arrivalTime']}</td>  
                    <td>{$data['dateOfJourney']}</td>   
                    <td> <a href ='editSchedule.php?edit={$data['trainName']}'>Edit</a></td> 
                    <td> <a href ='deleteSchedule.php?delete={$data['trainName']}'>Delete</a></td>            
                </tr>";
    }

    echo "</table>";
?>
    </form>
</center>
</body>
</html>