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
                                    To Station
                                </td>
                                <td>
                                    <input type="text" placeholder="New To station" name="toStation"><br>
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
