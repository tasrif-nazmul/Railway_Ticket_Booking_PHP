<?php
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="../assects/css/styles.css">
</head>
<body>
<!-- <center>
    <form>
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="../controllers/logout.php">logout</a> |
                    <a href="userProfile.php">Profile</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    <a href="trainInfo.php">Train Information</a></br>
                    <a href="bookTicket.php">Book Ticket</a> </br>
                    <a href="viewTicket.php">View Ticket</a> </br>
                    <a href="cancelTicket.php">Cancel Ticket</a> </br>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat
                </td>
            </tr>
        </table>
    </form>
</center> -->

<div class="main">
        <div class="navbar">
            <div class="icon">
            <h2 class="logo">Railway E-Ticket Service</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="trainInfo.php">Information</a></li>
                    <li><a href="userProfile.php">Profile</a></li>
                    <li><a href="../controllers/logout.php">Logout</a></li>
                </ul>
            </div>

        </div> 
        <div class="content">
               
        </div>
    </div>

</body>
</html>

