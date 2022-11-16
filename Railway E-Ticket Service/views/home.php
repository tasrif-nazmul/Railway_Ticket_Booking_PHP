<?php
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>Homepage</title>
</head>
<body>
<center>
    <form>
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="signin.php">Login</a> |
                    <a href="userProfile.php">Profile</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    <a href="trainInfo.php">Train Information</a></br>
                    <a href="bookTicket.php">Book Ticket</a> </br>
                    <a href="cancelTicket.php">Cancel Ticket</a> </br>
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