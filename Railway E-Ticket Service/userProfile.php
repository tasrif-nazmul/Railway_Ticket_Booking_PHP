<?php
if(!isset($_COOKIE['status']))
{
    header('location: signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Homepage</title>
</head>
<body>
<center>
    <form>
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="photo/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="logout.php">Logout</a> |
                    <a href="userProfile.php">Profile</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                <?php
                    $fptr = fopen("user.txt", "r");
                    if(!$fptr)
                    {
                        die("error");
                    }
                    //$content = fread($fptr, filesize("user.txt"));
                    //echo $content;
                    //echo $_COOKIE['userid'];
                    //echo $_COOKIE['password'];
                    $file = fopen('user.txt', 'r');

                    while(!feof($file)){

                        $data = fgets($file);

                        $user = explode("|", $data);

                        //print_r($user);

                        //echo count($user)."<br>";
                        if(count($user)!=1)
                        {
                            if($user[2] == $_COOKIE['userid'] && $user[3] == $_COOKIE['password'])
                            {

                                
                                echo "Name : ".$user[0]."<br>"; 
                                echo "Email : ".$user[1]."<br>"; 
                                echo "User name : ".$user[2]."<br>"; 
                                echo "Gender : ".$user[5]."<br>"; 
                                echo "Category : ".$user[6]."<br>"; 
                                echo "Date of Birth : ".$user[7]."<br>"; 

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