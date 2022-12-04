<?php
    session_start();
    if(isset($_GET['err']))
    {
        if($_GET['err'] == 'null')
        {
            echo"Must be filled all info....";
        }
        if($_GET['err'] == 'same')
        {
            echo"From and To station must be different....";
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
            echo"Schedule Added Successfully";
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
                                <select name="trainName">
                                        <option value>Select train name</option>
                                        <option value="Chitra Exress">Chitra Exress</option>
                                        <option value="Sundarban Exress">Sundarban Exress</option>
                                        <option value="Rajshahi Exress">Rajshahi Exress</option>
                                        <option value="Rangpur Exress">Rangpur Exress</option>
                                        <option value="Sylhet Exress">Sylhet Exress</option>
                                        <option value="Chottogram Exress">Chottogram Exress</option>
                                        <option value="Dhumketu Exress">Dhumketu Exress</option>
                                        <option value="Barishal Exress">Barishal Exress</option>
                                        <option value="Dhaka Exress">Dhaka Exress</option>
                                        <option value="Maymensingh Exress">Maymensingh Exress</option>
                                        <option value="Agarosindur Exress">Agarosindur Exress</option>
                                    </select></br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    From Station
                                </td>
                                <td>
                                    <select name="fromStation">
                                        <option value>Select From Station</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Chottogram">Chottogram</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Maymensingh">Maymensingh</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                    </select></br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Start time
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
                                    <select name="toStation">
                                        <option value>Select To Station</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Chottogram">Chottogram</option>
                                        <option value="Barishal">Barishal</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Maymensingh">Maymensingh</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                    </select></br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Arrival time
                                </td>
                                <td>
                                    <input type="time" name="arrivalTime"><br>
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
                              