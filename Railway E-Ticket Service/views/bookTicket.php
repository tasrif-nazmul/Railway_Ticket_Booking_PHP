<?php
require_once'../models/trainModel.php';
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>Ticket Booking</title>
</head>
<body>
<center>
    <form method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="signin.php">Login</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
            <td>
                </br>
                From Station: 
                <select name="from">
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
                 To station: 
                <select name="to">
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
                Date of Journey: 
                <input type="date" name="doj" value="" /></br>
                <input type="submit" name="btn" value="Search Train"/>
                </br>
            </td>
            <td>
            <?php 
                if(isset($_POST['btn']))
                {
                    $from = $_POST['from'];
                    $to = $_POST['to'];
                    $doj = $_POST['doj'];


                    $result = availableTrain($from,$to,$doj);
                    


                        if($result)
                        {
                            echo
                            "<table border=1>
                                <tr>
                                    <th>Train Name</th>
                                    <th>From Station</th>
                                    <th>To Station</th>
                                    <th>Date of Journey</th>
                                </tr>";
                                
                                while($rowNum  = mysqli_fetch_assoc($result))
                                {
                                    echo"
                                <tr>
                                    <td>{$rowNum['trainName']}</td>
                                    <td>{$rowNum['fromStation']}</td>
                                    <td>{$rowNum['toStation']}</td>
                                    <td>{$rowNum['dateOfJourney']}</td>
                                    <td> <a href ='selectSit.php?selectSit={$rowNum['trainName']}'>Book</a></td>
                                    
                                    
                                </tr>";
                                }
                            echo "</table>";
                        
                    }
                        else
                        {
                            echo'Data not found';
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