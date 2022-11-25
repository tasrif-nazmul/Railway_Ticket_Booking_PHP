<?php
    session_start();
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
    <form>
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
                    <input type="file" name="pp">
                    <?php

                        $con = mysqli_connect('localhost', 'root','','webtech');
                        $sql = "select Name, Email, Username, Gender, DateOfBirth from admin where username = '{$username}'";
                        
                        $result = mysqli_query($con, $sql);
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
                                    <th align="right">Date of Birht:</th>
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
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>