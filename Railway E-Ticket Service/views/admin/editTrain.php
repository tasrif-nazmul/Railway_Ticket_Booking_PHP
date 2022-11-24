<?php 

session_start();

	if (isset($_GET['edit'])) 
    {
		$name = $_GET['edit'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}
?>


<html>
<head>
    <title>Edit Product</title>

    <body>
    <a href="../views/dashboard.php">Home</a>&nbsp <a href="addTrain.php">Add Train </a> &nbsp <a href="../views/viewtrain.php">Display Trains </a>
    <br><br>
    <fieldset>
    <legend>EDIT PRODUCT</legend>
         <table>
             
            <form method="post" action="editTrainC.php" enctype=""> 
                
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
                                    From
                                </td>
                                <td>
                                    <input type="text" name="fromStation"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    To
                                </td>
                                <td>
                                    <input type="text" name="toStation"><br>
                                </td>
                            </tr>
                          
                            
                            <tr>
                                <td>
                                    Offday
                                </td>
                                <td>
                                <input type="text" name="offday"><br>
                                </td>
                            </tr>
                    <tr><td><input type="submit" value="Save" ></input> </td></tr>


</form>
</table>