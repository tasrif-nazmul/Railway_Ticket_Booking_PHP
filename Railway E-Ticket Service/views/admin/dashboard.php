<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../assects/css/admin/dashboard.css">

</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Dashboard</h1>
        </div>
            <ul>
                <li><a href="addTr.php">Add Train</a></li>
                <li><a href="viewtrain.php">View Train Details</a></li>
                <li><a href="addSchedule.php">Add Train Schedule</a></li>
                <li><a href="viewSchedule.php">View Schedule</a></li>
                <li><a href="viewSchedule.php">Update Schedule</a></li>
                <li><a href="viewuser.php">User Login Details</a></li>
            </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <a href="addTr.php">Add Train</a>
                <a href="">About</a>
                <a href="">Home</a>
                <a href="adminProfile.php">Profile</a>
            </div>

        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>1000</h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../assects/picture/dashboard/users.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>1000</h1>
                        <h3>Train</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../assects/picture/dashboard/train.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>1000</h1>
                        <h3>Schedule</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../assects/picture/dashboard/schedule.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>1000</h1>
                        <h3>Ticket Booking</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../../assects/picture/dashboard/book.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                
                
</body>
</html>