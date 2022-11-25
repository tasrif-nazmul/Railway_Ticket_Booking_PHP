<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>View Train</title>
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
                    <a href="../home.php">Home</a> |
                    <a href="../signin.php">Login</a> |
                    <a href="../reg.php">Registration</a>
                </td>
            </tr>
            <?php
    $con = mysqli_connect('localhost', 'root','','webtech');
    $sql = "select * from traininfo";
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
                <th>Offday</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['trainName']}</td>        
                    <td>{$data['fromStation']}</td>
                    <td>{$data['arrivalF']}</td>        
                    <td>{$data['toStation']}</td>   
                    <td>{$data['arrivalT']}</td>   
                    <td>{$data['Offday']}</td>   
                    <td> <a href ='editTrain.php?edit={$data['trainName']}'>Edit</a></td> 
                    <td> <a href ='deleteTrain.php?delete={$data['trainName']}'>Delete</a></td>            
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