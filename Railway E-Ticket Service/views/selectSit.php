<?php 

session_start();
	if (isset($_GET['selectSit'])) 
    {
		$name = $_GET['selectSit'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from train where trainName='{$name}'";
    $result = mysqli_query($con, $sql);

    $data  = mysqli_fetch_assoc($result);

    if (!isset($data))
    { 
        header('location: bookTicket.php?err=null_values');
    }
?>


<html>
<head>
    <title>Select Ticket</title>
</head>
    <body>
    <fieldset>
    <legend>Select Ticket</legend>
        <form method="post"  enctype=""> 
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
                        To Station:
                    </td>
                    <td>
                        <?php echo $data['toStation']; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Date of Journey:
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

        