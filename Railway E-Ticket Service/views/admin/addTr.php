<?php
    if(!isset($_COOKIE['adminStatus']))
    {
        header('location: signin.php?err=bad_request');
    }
?>

<html>
<head>
    <title>Train Details Insertion</title>
</head>
<body>
<center>
<form method="post" action="../../controllers/admin/addTrVal.php">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../assects/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="dashboard.php">Dashboard</a> |
                    <a href="../controllers/logout.php">Logout</a> |
                    <a href="`../reg.php">Registration</a>
                </td>
            </tr>
            
            <tr>
            <td colspan=2 align="center">
                    <fieldset>
                        <table>
                        <tr>
                            <td>
                            <h4>
                                <?php
                                    session_start();
                                    if(isset($_GET['err']))
                                    {
                                        if($_GET['err'] == 'null')
                                        {
                                            echo"Must be filled all info....";
                                            //echo'<script>alert("Must be filled all info");</script>';
                                        }
                                        if($_GET['err'] == 'trExist')
                                        {
                                            echo"This Train is already exist....";
                                            //echo'<script>alert("This Train is aready exist");</script>';
                                        }
                                    }
                                    if(isset($_GET['success']))
                                    {
                                        if($_GET['success'] == 'yes')
                                        {
                                            //echo"Train Added Successfully";
                                            echo'<script>alert("Train added successfully");</script>';
                                        }
                                    }
                                
                                ?>
                            </h4>
                            </td>
                        </tr>
                        <tr>
                                <td>
                                    Train Name 
                                </td>
                                <td>
                                <input type="text" name = "trainName">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    From Sattion
                                </td>
                                <td>
                                    <input type="text" name="fromStation"><br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Start Time
                                </td>
                                <td>
                                    <input type="time" name="startTime"><br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    To Station
                                </td>
                                <td>
                                    <input type="text" name="toStation"><br>
                                </td>
                            </tr>
                          
                            <tr>
                                <td>
                                    Arrival Time
                                </td>
                                <td>
                                    <input type="time" name="arrivalTime"><br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Offday
                                </td>
                                <td>
                                    <select name="offday">
                                        <option value>Day?</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                
                                </td>
                            </tr>

                        </table>
                       
                       
                        
                        <br>
                        <input type="submit" value="ADD" name="addTrain">
                        <input type="button" value="Back" onclick="history.back()">
                        
                    </fieldset>
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
                              