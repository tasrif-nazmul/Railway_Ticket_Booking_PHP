<?php 

session_start();
    if(!isset($_COOKIE['adminStatus']))
    {
        header('location: signin.php?err=bad_request');
    }

	if (isset($_GET['err'])) 
    {
		if($_GET['err'] == 'null')

        echo"Must be filled all information...";
		 
		  
	}
	if (isset($_GET['edit'])) 
    {
		$name = $_GET['edit'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}
?>


<html>
<head>
    <title>Edit Train</title>

    <body>
    <!-- <a href="../views/dashboard.php">Home</a>&nbsp <a href="addTrain.php">Add Train </a> &nbsp <a href="../views/viewtrain.php">Display Trains </a>
    <br><br> -->
    <fieldset>
    <legend>Edit Train</legend>
         
             
            <form method="post" action="../../controllers/admin/editTrainVal.php" enctype=""> 
            <table> 
                
                <tr>
                                <td>
                                    Train Name 
                                </td>
                                <td>

                                <input type="text" placeholder="Enter Train new name" name="trainName">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    From Station
                                </td>
                                <td>
                                    <input type="text" placeholder="New From Station" name="fromStation"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Start Time
                                </td>
                                <td>
                                    <input type="time" placeholder="New Start Time" name="startTime"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    To Station
                                </td>
                                <td>
                                    <input type="text" placeholder="New To station" name="toStation"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Arrival Time
                                </td>
                                <td>
                                    <input type="time" placeholder="New Arrival Time" name="arrivalTime"><br>
                                </td>
                            </tr>

                            
                          <tr>
                                <td>
                                    Off Day
                                </td>
                                <td>
                                <input type="text" placeholder="New Offday" name="offday"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Save" name="save"></input>
                                </td>
                            </tr>

                            </table>
</form>
