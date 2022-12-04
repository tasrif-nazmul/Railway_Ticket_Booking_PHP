<?php
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>View Ticket</title>
</head>
<body>
<center>
    <form method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../assects/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="">Home</a> |
                    <a href="">Login</a> |
                    <a href="">Registration</a>
                </td>
            </tr>
            <?php
            $username = $_COOKIE['username'];
    $con = mysqli_connect('localhost', 'root','','webtech');
    $sql = "select * from ticketbook where username='$username'";
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
                <th>Date of Journey</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['trainName']}</td>        
                    <td>{$data['fromStation']}</td>
                    <td>{$data['startTime']}</td>        
                    <td>{$data['toStation']}</td>   
                    <td>{$data['arrivalTime']}</td>   
                    <td>{$data['dateOfJourney']}</td>      
                </tr>";
    }

    echo "</table>";
?>
</table>
            <tr>
            <br>
            <td> <button onClick="window.location.href='dashboard.php';"> 
                Back  
                </button> </td><br>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>