<?php
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
$username = $_COOKIE['username'];
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="../assects/css/home.css">
</head>
<body>

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
            <a href="trainInfo.php">Train Information</a></br>
            <a href="bookTicket.php">Book Ticket</a> </br>
            <a href="viewTicket.php">View Ticket</a> </br>
            <a href="cancelTicket.php">Cancel Ticket</a> </br>
            <a href="changePass.php">Change Password</a> </br>
        </div>
    </div>

</body>
</html>

