<?php
if(!isset($_COOKIE['status']))
{
    header('location: signin.php?err=bad_request');
}
?>


<html>
<head>
    <title>Dhumketu</title>
</head>
<body>
<center>
    <form>
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="photo/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="logout.php">Logout</a> |
                    <a href="userProfile.php">Profile</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h2 align="center">DHUMKETU EXPRESS</h2>
                    <h3>Start Time____________05h 40m____________End Time</h3>
                    <h5>06:00 pmTime(Dhaka)_____________________________11:40 pm(Rajshahi))</h5>
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