<?php 

session_start();

	if (isset($_GET['edit'])) 
    {
		$name = $_GET['edit'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}
    if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}
?>


<html>
<head>
    <title>Edit Product</title>

    <body>
    <a href="../views/dashboard.php">Home</a>&nbsp <a href="addSchedule.php">Add Train </a> &nbsp <a href="../views/viewSchedule.php">Display Schedule </a>
    <br><br>
    <fieldset>
    <legend>EDIT SCHEDULE</legend>
         <table>
             
            <form method="post" action="editScheduleC.php" enctype=""> 
                
                <table>
                <tr>
                                <td>
                                Train Name 
                                </td>
                                <td>
                                <select name="name">
                                <option value>Add a train</option>                              
                                <option value="SUNDARBAN EXPRESS">SUNDARBAN EXPRESS</option>
                                <option value="CHITRA EXPRESS">CHITRA EXPRESS</option>
                                <option value="BENAPOLE EXPRESS">BENAPOLE EXPRESS</option>
                                <option value="DHUMKETU EXPRESS">DHUMKETU EXPRESS</option>
                                </select></br>
                                </td>
                            </tr>
                            <tr>
                            <td>
                            Train Type
                                </td>
                                <td>
                                <select name="type">
                                <option value>Select</option>                              
                                <option value="Up">Up</option>
                                <option value="Down">Down</option>
                                </select></br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Start time 
                                </td>
                                <td>
                                    <input type="text" name="start"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Destination time
                                </td>
                                <td>
                                    <input type="text" name="finish"><br>
                                </td>
                            </tr>
                    <tr><td><input type="submit" value="Save" ></input> </td></tr>


</form>
</table>