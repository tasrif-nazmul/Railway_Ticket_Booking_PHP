<?php 

session_start();

	if (isset($_GET['delete'])) 
    {
		$name = $_GET['delete'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}
    if(!isset($_COOKIE['adminStatus']))
{
    header('location: signin.php?err=bad_request');
}


    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from train_schedule where name='{$name}'";
    $result = mysqli_query($con, $sql);

    $data  = mysqli_fetch_assoc($result);

    if (!isset($data))
    { 
        header('location: ../views/viewSchedule.php?err=null_values');
    }
?>


<html>
<head>
    <title>Delete Train</title>

    <body>
    <fieldset>
    <legend>DELETE Train</legend>
         <table>
             
            <form method="post" action="deleteScheduleC.php" enctype=""> 
                
                <table>
                    <tr><td>Name: <?php echo $data['name']; ?></td></tr>
                    <tr><td>Train Type: <?php echo $data['type']; ?></td></tr>
                    <tr><td>Start Time: <?php echo $data['start']; ?></td></tr>
                    <tr><td>Destintion Time: <?php echo $data['finish']; ?></td></tr>
                    
                   
                    <tr><td><hr></td></tr>
                    <tr><td><input type="submit" value="Delete" ></input> </td></tr>


</form>
</table>