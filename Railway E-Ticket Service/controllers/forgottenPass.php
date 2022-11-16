<?php

if(isset($_GET['err']))
{
    if($_GET['err'] == 'invalid')
    {
        echo "Invalid Username or Password...";
    }
}

?>
<html>
<head>
    <title>Forgotten Password</title>
</head>
<body>
<center>
    <form action="forgetPassVal.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                <a href="home.php"> <img src="photo/train.jpg" width="30px">Railway E-ticket Service</a>
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="signin.php">Login</a> |
                    <a href="reg.php">Regestration</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h3>Forgotten Password</h3><br>

                    <fieldset>
                        <legend align="center">Category</legend>
                        <input type="radio" name="category" value="admin"/> Admin 
                        <input type="radio" name="category" value="user"/> User
                    </fieldset>

                    User Name <input type="text" name="username"></br> 
                    Email address <input type="email" name="email"></br>
                     <input type="submit" name="btn" value="Submit"/>

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