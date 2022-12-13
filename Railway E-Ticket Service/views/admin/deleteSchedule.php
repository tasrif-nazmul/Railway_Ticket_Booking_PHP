<?php 
require_once'../../models/trainModel.php';

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
	if (isset($_GET['delete'])) 
    {
		$name = $_GET['delete'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}


    $data = deleteSchedulee($name);

    if (!isset($data))
    { 
        header('location: viewSchedule.php?err=null_values');
    }
?>


<html>
<head>
    <title>Delete Schedule</title>
</head>
    <body>
    <fieldset>
    <legend>Delete Train</legend>
        <form method="post" action="../../controllers/admin/deleteScheduleC.php" enctype=""> 
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
                        <?php echo $data['startTime']; ?>
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
                        <?php echo $data['arrivalTime']; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Date Of Journey:
                    </td>
                    <td>
                        <?php echo $data['dateOfJourney']; ?>
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

        