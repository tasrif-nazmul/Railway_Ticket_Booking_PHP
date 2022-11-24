<?php
if(!isset($_COOKIE['status']))
{
    header('location: ../views/login.php?err=bad_request');
}
?>

<html>
<head>
    <title>View Train</title>
</head>
<body>
<center>
    <form action="dashboard.php" method="post">
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
    $sql = "select * from train_details";
    $result = mysqli_query($con, $sql);
    // $data = mysqli_fetch_assoc($result);
    // print_r($data);

    echo "<table border=1> 
            
            <tr>
                <th>name</th>
                <th>from</th>
                <th>to</th>
                <th>offday</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['name']}</td>        
                    <td>{$data['fromStation']}</td>
                    <td>{$data['toStation']}</td>        
                    <td>{$data['offday']}</td>   
                    <td> <a href ='../controllers/editTrain.php?edit={$data['name']}'>Edit</a></td>   
                    <td> <a href ='../controllers/deleteTrain.php?delete={$data['name']}'>Delete</a></td>            
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