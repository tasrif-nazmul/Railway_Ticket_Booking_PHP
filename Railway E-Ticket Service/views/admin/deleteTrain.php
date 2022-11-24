<?php 

session_start();

	if (isset($_GET['delete'])) 
    {
		$name = $_GET['delete'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}


    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from train_details where name='{$name}'";
    $result = mysqli_query($con, $sql);

    $data  = mysqli_fetch_assoc($result);

    if (!isset($data))
    { 
        header('location: ../views/viewtrain.php?err=null_values');
    }
?>


<html>
<head>
    <title>Delete Train</title>

    <body>
    <fieldset>
    <legend>DELETE Train</legend>
         <table>
             
            <form method="post" action="deleteTrainC.php" enctype=""> 
                
                <table>
                    <tr><td>Name: <?php echo $data['name']; ?></td></tr>
                    <tr><td>fromStation: <?php echo $data['fromStation']; ?></td></tr>
                    <tr><td>toStation: <?php echo $data['toStation']; ?></td></tr>
                    <tr><td>Offday: <?php echo $data['offday']; ?></td></tr>
                    
                   
                    <tr><td><hr></td></tr>
                    <tr><td><input type="submit" value="Delete" ></input> </td></tr>


</form>
</table>