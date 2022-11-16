<?php
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
else if(isset($_GET['err']))
{
    
    if($_GET['err'] == 'null')
    {
        echo "Please select a train..";
    }
   
}
?>

<html>
<head>
    <title>Train Information</title>
</head>
<body>
<center>
    <form action="../controllers/trainInfoVal.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="../assects/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="../controllers/logout.php">logout</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                <select name="searchTrain">
                    <option value>Select Train</option>                              
                    <option value="sundarban">SUNDARBAN EXPRESS</option>
                    <option value="chitra">CHITRA EXPRESS</option>
                    <option value="benapole">BENAPOLE EXPRESS</option>
                    <option value="dhumketu">DHUMKETU EXPRESS</option>
                </select></br>
                <input type="submit" name="btn" value="Search"/>
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