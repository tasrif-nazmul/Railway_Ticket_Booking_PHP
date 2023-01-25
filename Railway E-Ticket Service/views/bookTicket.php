<?php
require_once'../models/trainModel.php';
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
$username = $_COOKIE['username'];
?>

<html>
<head>
    <title>Ticket Booking</title>
    <link rel="stylesheet" href="../assects/css/user/bookTicket.css">
</head>
<body>
    <div class="fullBody">
        <div class="navbar">
            <div class="nav">
                <div class="logo">
                    <a href="home.php">Railway E-ticket Service</a>
                </div>

                <div class="link">
                    <a href="home.php">Home</a>
                    <a href="userProfile.php">
                        <?php
                            $con = mysqli_connect('localhost', 'root', '', 'webtech');
                            $sql = "select name from users where Username='{$username}'";
                            $result = mysqli_query($con, $sql);
                            if($result)
                            {
                                while ($row = $result->fetch_assoc())
                                {
                                    echo $row['name'];
                                }
                            }
                        ?></a>
                </div>
                

            </div>
            
        </div>
                
        <div class="content">
            <div class="content1">
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
                    <option value="Benapol">Benapol</option>
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
                    <option value="Benapol">Benapol</option>
                </select></br>
                Date of Journey: 
                <input type="date" name="doj" value="" /></br>
                <input type="submit" name="btn" value="Search Train"/>
                </br>
            </div>

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
        </div>
    </div>
</body>
</html>