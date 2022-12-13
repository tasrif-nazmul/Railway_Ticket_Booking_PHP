<?php
    session_start();
    require_once '../../models/trainModel.php';
    $username='username';
    if(isset($_COOKIE['adminStatus']))
    {
        $username=$_COOKIE['username'];
    }
    else
    {
        header('location: signin.php?err=bad_request');
    }
?>

<html>
<head>
    <title>Admin Profile</title>
</head>
<body>
<center>
    <form action="#" method="POST" enctype="multipart/form-data">
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="../../controllers/admin/logoutAdmin.php">Logout</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    <input type="file" name="uploadfile">
                    <input type="submit" name="submit" value="Upload">
                    <?php

                        $result = adminPrpfile($username);
                        if ($result) 
                        {
                            // Fetch one and one row
                            while ($row = $result->fetch_assoc()) 
                            {
                            ?>
                            <table>
                                <tr>
                                    <th align="right">Name:</th>
                                    <td align="left"><?php echo $row['Name'];?></td>
                                </tr>
                                <tr>
                                    <th align="right">Email:</th>
                                    <td align="left"><?php echo $row['Email'];?></td>
                                </tr>
                                <tr>
                                    <th align="right">User name:</th>
                                    <td align="left"><?php echo $row['Username'];?></td>
                                </tr>
                                <tr>
                                    <th align="right">Gender:</th>
                                    <td align="left"><?php echo $row['Gender'];?></td>
                                </tr>
                                <tr>
                                    <th align="right">Date of Birth:</th>
                                    <td align="left"><?php echo $row['DateOfBirth'];?></td>
                                </tr>
                            </table>
                            <?php
                            }
        
                        }
                        
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    @copyright 2022
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
