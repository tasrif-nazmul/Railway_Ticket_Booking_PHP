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
    <fieldset>
    <legend>Edit Schedule</legend>
         
             
            <form method="post" action="../../controllers/admin/editScheduleC.php" enctype=""> 
            <table> 
                <tr>
                    <td>
                        Train Name 
                    </td>
                    <td>
                        <select name="trainName">
                            <option value>Select train name</option>
                            <option value="Chitra Exress">Chitra Exress</option>
                            <option value="Sundarban Exress">Sundarban Exress</option>
                            <option value="Rajshahi Exress">Rajshahi Exress</option>
                            <option value="Rangpur Exress">Rangpur Exress</option>
                            <option value="Sylhet Exress">Sylhet Exress</option>
                            <option value="Chottogram Exress">Chottogram Exress</option>
                            <option value="Dhumketu Exress">Dhumketu Exress</option>
                            <option value="Barishal Exress">Barishal Exress</option>
                            <option value="Dhaka Exress">Dhaka Exress</option>
                            <option value="Maymensingh Exress">Maymensingh Exress</option>
                            <option value="Agarosindur Exress">Agarosindur Exress</option>
                        </select></br>
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
                        Start time
                    </td>
                    <td>
                        <input type="time" name="startTime"><br>
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
                        Arrival time
                    </td>
                    <td>
                        <input type="time" name="arrivalTime"><br>
                    </td>
                </tr>
                    
                <tr>
                    <td>
                        Date Of Journey
                    </td>
                    <td>
                    <input type="date" placeholder="Date Of Journey" name="doj"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Save" name="save"></input>
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
    </body>
</head>
</html>
