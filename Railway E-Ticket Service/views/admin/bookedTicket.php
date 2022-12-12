<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Booked Tickets</title>
    <link rel="stylesheet" href="../../assects/css/tableStyle.css">
</head>
<body>
<center>
    <form method="post">
    <?php
    $con = mysqli_connect('localhost', 'root','','webtech');
    $sql = "select * from ticketbook";
    $result = mysqli_query($con, $sql);

    echo "<table> 
            
            <tr>
                <th>Ticket Number</th>
                <th>Person Name</th>
                <th>Train Name</th>
                <th>From Station</th>
                <th>To Station</th>
                <th>Date Of Journey</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result))
    {
        echo    "<tr>
                    <td>{$data['id']}</td>        
                    <td>{$data['username']}</td>        
                    <td>{$data['trainName']}</td>
                    <td>{$data['fromStation']}</td>        
                    <td>{$data['toStation']}</td>   
                    <td>{$data['dateOfJourney']}</td>           
                </tr>";
    }

    echo "</table>";
?>
    </form>
</center>
</body>
</html>