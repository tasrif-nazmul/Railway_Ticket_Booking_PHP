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
    <title>Print Ticket</title>
    <link rel="stylesheet" href="../assects/css/print.css">
</head>
    <body>
        <form> 
            <table>    
                <tr>
                    <th colspan="3" id="title1">Railway E-Ticket System</th>
                </tr>
                <tr>
                    <td>
                        Ticket No:
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['id']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Train name
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['trainName']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        From Station
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['fromStation']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Start Time
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['startTime']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        To Station
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['toStation']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Arrival Time
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['arrivalTime']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Journey
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['dateOfJourney']; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="Print Ticket" name="Print" onclick="window.print()">
                    </td>
                </tr>

            </table>
        </form>
    </body>
</html>

        