<?php 

    session_start();
    if(!isset($_COOKIE['status']))
    {
        header('location: login.php?err=bad_request');
    }

	
	if (isset($_GET['print'])) 
    {
		$name = $_GET['print'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from ticketbook where id='{$name}'";
    $result = mysqli_query($con, $sql);

    $data  = mysqli_fetch_assoc($result);

    if (!isset($data))
    { 
        header('location: viewTicket.php?err=null_values');
    }
?>


<html>
<head>
    <title>Cancel Ticket</title>
</head>
    <body>
    <fieldset>
    <legend>Print Ticket</legend>
        <form> 
            <table>    
                
                <tr>
                    <td>
                        Ticket No:
                    </td>
                    <td>
                        <?php echo $data['id']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Train name:
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
                        Date of Journey:
                    </td>
                    <td>
                        <?php echo $data['dateOfJourney']; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Print Ticket" name="Print" onclick="window.print()">
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
    </body>
</html>

        