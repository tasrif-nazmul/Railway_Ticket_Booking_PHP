<?php 

session_start();
    if(!isset($_COOKIE['adminStatus']))
    {
        header('location: ../login.php?err=bad_request');
    }

	if (isset($_GET['err'])) 
    {
		if($_GET['err'] == 'null')

        echo"Must be filled all information...";
		 
		  
	}
	if (isset($_GET['delete'])) 
    {
		$name = $_GET['delete'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from traininfo where trainName='{$name}'";
    $result = mysqli_query($con, $sql);

    $data  = mysqli_fetch_assoc($result);

    if (!isset($data))
    { 
        header('location: viewtrain.php?err=null_values');
    }
?>


<html>
<head>
    <title>Delete Train</title>
</head>
    <body>
    <!-- <a href="../views/dashboard.php">Home</a>&nbsp <a href="addTrain.php">Add Train </a> &nbsp <a href="../views/viewtrain.php">Display Trains </a>
    <br><br> -->
    <fieldset>
    <legend>Delete Train</legend>
        <form method="post" action="../../controllers/admin/deleteTrainVal.php" enctype=""> 
            <table>    
                
                <tr>
                    <td>
                        Train Name:
                    </td>
                    <td>
                        <?php echo $data['trainName']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        From Station:
                    </td>
                    <td>
                        <?php echo $data['fromStation']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Start Time:
                    </td>
                    <td>
                        <?php echo $data['arrivalF']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        To Station:
                    </td>
                    <td>
                        <?php echo $data['toStation']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Arrival Time:
                    </td>
                    <td>
                        <?php echo $data['arrivalT']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Off Day:
                    </td>
                    <td>
                        <?php echo $data['Offday']; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Delete" name="delete">
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
    </body>
</html>

        