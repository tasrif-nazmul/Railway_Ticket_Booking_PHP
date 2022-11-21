<?php
session_start();
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">
        You have successfully purches your ticket....</br>
    </h1>
    <h3 align="center">Your Ticket number is 
        <?php 
            $booked_sit=$_SESSION['booked_sit'];
            for($b=0; $b<count($booked_sit); $b++)
            {
                echo $booked_sit[$b].", ";
            }
        ?>
    </h3>
</body>
</html>