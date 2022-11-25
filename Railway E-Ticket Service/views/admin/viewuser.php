<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>View User</title>
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
                    <a href="dashboard.php">Dashboard</a> |
                    <a href="../../controllers/admin/logoutAdmin.php">Logout</a> |
                    <a href="">Registration</a>
                </td>
            </tr>
            <?php
    $con = mysqli_connect('localhost', 'root','','webtech');
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);

    echo "<table border=1> 
            
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th>Suspend</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['Name']}</td>        
                    <td>{$data['Email']}</td>
                    <td>{$data['Username']}</td>        
                    <td>{$data['Password']}</td>   
                    <td>{$data['Gender']}</td>   
                    <td>{$data['DateOfBirth']}</td>
                    <td> <a href ='suspendUser.php?suspend={$data['Username']}'>Suspend</a></td>            
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