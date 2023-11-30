<?php
require_once'../models/trainModel.php';
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>Train Information</title>
    <link rel="stylesheet" href="../assects/css/trainInfo.css">
</head>
<body>
<div class="main">
        <div class="navbar">
            <div class="icon">
            <h2 class="logo">Railway E-Ticket Service</h2>
        </div>

        <div class="menu">
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="trainInfo.php">Information</a></li>
                <li><a href="userProfile.php">Profile</a></li>
                <li><a href="../controllers/logout.php">Logout</a></li>
            </ul>
        </div>

        <!-- <div class="content">
            <a href="trainInfo.php">Train Information</a></br>
            <a href="bookTicket.php">Book Ticket</a> </br>
            <a href="viewTicket.php">View Ticket</a> </br>
            <a href="cancelTicket.php">Cancel Ticket</a> </br>
            <a href="changePass.php">Change Password</a> </br>
        </div> -->
        <!-- <div class="content"> -->
            <table>
                <tr>
                    <td>
                    <input type="text" name="typedText" id="typedText" placeholder="Search your train" onkeyup='liveSearchAJAX()'>
                    <input type="submit" name="search" id="search" onclick='liveSearchAJAX()'>

                    </td>
                </tr>
                <tr>
                    <td>
                        <h3 id="info"></h3>
                
                    
                    <td>
                </tr>
                
            </table>
        <!-- </div> -->
  

    <script>
    

        function liveSearchAJAX()
        {  
        let typedText = document.getElementById("typedText").value;
        let xhttp = new XMLHttpRequest();

        xhttp.open('POST', '../controllers/trainInfoVal.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('typedText='+typedText);

        xhttp.onreadystatechange = function()
        {
            
            if(this.readyState == 4 && this.status == 200)
            {    
                    //alert(this.responseText);
                document.getElementsByTagName("h3")[0].innerHTML = this.responseText;
            }
            
        }
    }
    </script>
</div>
</body>
</html>