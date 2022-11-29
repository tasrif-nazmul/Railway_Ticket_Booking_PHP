<?php
require_once'../models/trainModel.php';
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
?>

<html>
<head>
    <title>Train Information</title>
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
                    <a href="../controllers/logout.php">logout</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td>
                <input type="text" name="searchTrain">
                <input type="submit" name="search">

                </td>
                <td>
            
                <?php 
                if(isset($_POST['search']))
                {
                    $searchTrain = $_POST['searchTrain'];
                    // $sql = "select * from `traininfo` where id = '$searchTrain' or trainName = '$searchTrain'";
                    // $result = mysqli_query($con, $sql);
                    // $rowNum = mysqli_fetch_assoc($result);

                    $result = traininfo($searchTrain);
                    $rowNum = traininfoo($searchTrain);
                        if($result >0)
                        {
                            echo
                            '<table border="1">
                                <tr>
                                    <th>Train Name</th>
                                    <th>From Station</th>
                                    <th>Arrival Time</th>
                                    <th>To Station</th>
                                    <th>Arrival Time</th>
                                </tr>
                                <tr>
                                    <td>'.$rowNum['trainName'].'</td>
                                    <td>'.$rowNum['fromStation'].'</td>
                                    <td>'.$rowNum['arrivalF'].'</td>
                                    <td>'.$rowNum['toStation'].'</td>
                                    <td>'.$rowNum['arrivalT'].'</td>
                                </tr>
                            </table>';
                        }
                        else
                        {
                            echo'Data not found';
                        }
                    
                }
                
                ?>
                <td>
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