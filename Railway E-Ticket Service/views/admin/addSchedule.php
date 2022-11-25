<?php
include'../../models/connect.php';
if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Search Train</title>
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
                <select name="searchTrain">
                    <option>Select Train</option>                              
                    <option value="1">SUNDARBAN EXPRESS</option>
                    <option value="2">CHITRA EXPRESS</option>
                    <option value="3">BENAPOLE EXPRESS</option>
                    <option value="4">DHUMKETU EXPRESS</option>
                </select></br>
                <input type="submit" name="search">

                </td>
                <td>
            
                <?php 
                    if(isset($_POST['search']))
                    {
                        $searchTrain = $_POST['searchTrain'];
                        $sql = "select * from `traininfo` where id = '$searchTrain'";
                        $result = mysqli_query($con, $sql);
                        $rowNum = mysqli_fetch_assoc($result);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                
                                echo
                                '<table>
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
                                    
                                    <tr>
                                    <input type="submit" name="addShedule" value="ADD">
                                    
                                    </tr>
                                    
                                    
                                </table>';
                                if(isset($_POST['addShedule']))
                                    {
                                        header('location: nextpage.php');
                                        echo"Data saved";
                                    }
                            }
                            
                            else
                            {
                                
                                echo'Data not found';
                            }
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