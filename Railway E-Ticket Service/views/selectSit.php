<?php 

session_start();
if(!isset($_COOKIE['status']))
{
    header('location: login.php?err=bad_request');
}
	if (isset($_GET['selectSit'])) 
    {
		$trainname = $_GET['selectSit'];
        $_SESSION['trainname']=$trainname;

        setcookie('row_name',$trainname,time()+60*60,'/');	  
	}

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from train where trainName='{$trainname}'";
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
        <form method="post"  enctype="" action="payment.php"> 
            <table>    
                
                <tr>
                    <td>
                        Train Name
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
                        <?php echo $data['fromStation']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Start Time
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
                        Arrival Time
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
                        <?php echo $data['dateOfJourney']; ?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Book" name="book">
                        <a href="bookTicket.php">Back</a>
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
    </body>
</html>

        