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
	if (isset($_GET['suspend'])) 
    {
		$name = $_GET['suspend'];

        setcookie('row_name',$name,time()+60*60,'/');
		 
		  
	}

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where Username='{$name}'";
    $result = mysqli_query($con, $sql);

    $data  = mysqli_fetch_assoc($result);

    if (!isset($data))
    { 
        header('location: viewUser.php?err=null_values');
    }
?>


<html>
<head>
    <title>Suspend User</title>
</head>
    <body>
    <fieldset>
    <legend>Suspend User</legend>
        <form method="post" action="../../controllers/admin/suspendUserVal.php" enctype=""> 
            <table>    
                
                <tr>
                    <td>
                        Name
                    </td>

                    <td>
                        :
                    </td>

                    <td>
                        <?php echo $data['Name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>

                    <td>
                        :
                    </td>

                    <td>
                        <?php echo $data['Email']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        User Name
                    </td>

                    <td>
                        :
                    </td>

                    <td>
                        <?php echo $data['Username']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>

                    <td>
                        :
                    </td>

                    <td>
                        <?php echo $data['Password']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                    </td>

                    <td>
                        :
                    </td>

                    <td>
                        <?php echo $data['Gender']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Of Birth
                    </td>

                    <td>
                        :
                    </td>

                    <td>
                        <?php echo $data['DateOfBirth']; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Suspend" name="suspend">
                    </td>
                </tr>

            </table>
        </form>
    </fieldset>
    </body>
</html>

        