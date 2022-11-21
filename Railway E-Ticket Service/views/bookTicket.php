<?php
// session_start();
// $from = $_POST['from'];
// $to = $_POST['to'];
// $doj = $_POST['doj'];
session_start();
require_once "../models/userModel.php";
$trainname = $_POST['trname'];
$Fstation = $_POST['Fstation'];
$arrivalF = $_POST['arrivalF'];
$Tstation = $_POST['Tstation'];
$arrivalT = $_POST['arrivalT'];

require_once "../models/userModel.php";


if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
else if(isset($_GET['err']))
{
    
    if($_GET['err'] == 'wrong')
    {
        echo "From and To station must be different";
    }
    else if($_GET['err'] == 'null')
    {
        echo "Must be filled all info..";
    }
    else if($_GET['err'] == 'invalid')
    {
        echo "Something wrong.....";
    }
   
}
?>
<html>
<head>
    <title>Ticket Booking</title>
</head>
<body>
<center>
    <form action = "../controllers/bookTicket.php">
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
            <td colspan="2">
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