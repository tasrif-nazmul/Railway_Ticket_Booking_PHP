<?php
if(!isset($_COOKIE['status']))
{
    header('location: ../signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Admin Profile</title>
</head>
<body>
<center>
    <form>
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="../photo/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="dashboard.php">Dashboard</a> |
                    <a href="../logout.php">Logout</a> |
                    <a href="adminProfile.php">Profile</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                <?php
                    $fptr = fopen("../admin.txt", "r");
                    if(!$fptr)
                    {
                        die("error");
                    }
                    //$content = fread($fptr, filesize("user.txt"));
                    //echo $content;
                    //echo $_COOKIE['userid'];
                    //echo $_COOKIE['password'];
                    $file = fopen('../admin.txt', 'r');

                    while(!feof($file)){

                        $data = fgets($file);

                        $admin = explode("|", $data);

                        //print_r($user);

                        //echo count($user)."<br>";
                        if(count($admin)!=1)
                        {
                            if($admin[2] == $_COOKIE['userid'] && $admin[3] == $_COOKIE['password'])
                            {

                                
                                echo "Name : ".$admin[0]."<br>"; 
                                echo "Email : ".$admin[1]."<br>"; 
                                echo "admin name : ".$admin[2]."<br>"; 
                                echo "Gender : ".$admin[5]."<br>"; 
                                echo "Category : ".$admin[6]."<br>"; 
                                echo "Date of Birth : ".$admin[7]."<br>"; 

                            }
                        }
                        

                    }
                ?>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>