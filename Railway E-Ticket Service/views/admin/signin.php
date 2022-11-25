<?php

if(isset($_GET['err']))
{
    if($_GET['err'] == 'null')
    {
        echo "Must be filled all info..";
    }
    else if($_GET['err'] == 'invalid')
    {
        echo "Invalid Username or Password...";
    }
    else if($_GET['err'] == 'bad_request')
    {
        echo "Please login first...";
    }
}

?>


<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
    <form action="../../controllers/admin/signinVal.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../assects/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="logout.php">Logout</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    
                    <fieldset>
                        <h3>Admin Login</h3>
                    Username <input type="text" name="username">
                    <br>
                    Password <input type="password" name="password"><br>
                    <input type="submit" name="btn" value="Login"/>
                    <a href="signup.php">Signup</a>
                    <a href="../forgottenPass.php">Forgotten Password</a></td>
                    </fieldset>
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