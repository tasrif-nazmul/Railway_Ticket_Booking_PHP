<?php
    session_start();
    $username = 'username';
    if (isset($_COOKIE['status'])) {
        $username = $_COOKIE['username'];
    } else {
        header('location: login.php?err=bad_request');
    }
?>

<html>

<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../assects/css/user/userProfile.css">
</head>

<body>
    <div class="center-container">
        <form>
            <div class="header">
                <div class="logo">
                    <a href="home.php"><img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </div>
                <div class="nav-links">
                    <a href="home.php">Home</a>
                    <a href="../controllers/logout.php">Logout</a>
                    <a href="userProfile.php">Profile</a>
                </div>
            </div>

            <div class="profile-section">
                <input type="file" name="pp">
                <?php

                $con = mysqli_connect('localhost', 'root', '', 'webtech');
                $sql = "select Name, Email, Username, Gender, DateOfBirth from users where username = '{$username}'";

                $result = mysqli_query($con, $sql);
                if ($result) {
                    // Fetch one and one row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="user-details">
                            <div>
                                <span class="label">Name:</span>
                                <span class="value"><?php echo $row['Name']; ?></span>
                            </div>
                            <div>
                                <span class="label">Email:</span>
                                <span class="value"><?php echo $row['Email']; ?></span>
                            </div>
                            <div>
                                <span class="label">User name:</span>
                                <span class="value"><?php echo $row['Username']; ?></span>
                            </div>
                            <div>
                                <span class="label">Gender:</span>
                                <span class="value"><?php echo $row['Gender']; ?></span>
                            </div>
                            <div>
                                <span class="label">Date of Birth:</span>
                                <span class="value"><?php echo $row['DateOfBirth']; ?></span>
                            </div>
                        </div>
                <?php
                    }
                }

                ?>
            </div>
        </form>
    </div>
</body>

</html>
