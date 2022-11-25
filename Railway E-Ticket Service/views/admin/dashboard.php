<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<center>
    <form>
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="dashboard.php"> <img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="../../controllers/admin/logoutAdmin.php">Logout</a> |
                    <a href="adminProfile.php">Admin Profile</a> |
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    <a href="addTr.php">Add Train</a></br>
                    <a href="viewtrain.php">View Train Details</a></br>
                    <a href="addSchedule.php">Add Train Schedule</a></br>
                    <a href="viewSchedule.php">View & Update Train Schedule</a></br>
                    <a href="viewuser.php">User Login Details</a>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>