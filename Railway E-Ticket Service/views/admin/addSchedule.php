<?php
    session_start();
    if(isset($_GET['err']))
    {
        if($_GET['err'] == 'null')
        {
            echo"Must be filled all info....";
        }
        if($_GET['err'] == 'trExist')
        {
            echo"This Train is already exist....";
        }
    }
    if(isset($_GET['success']))
    {
        if($_GET['success'] == 'yes')
        {
            echo"Train Added Successfully";
        }
    }
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
<form method="post" action="../../controllers/admin/addScheduleC.php">
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
                                    To Station
                                </td>
                                <td>
                                    <input type="text" name="toStation"><br>
                                </td>
                            </tr>
                          
                            <tr>
                                <td>
                                    Date of Journey
                                </td>
                                <td>
                                    <input type="date" name="dateOfJourney"><br>
                                
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
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
                              