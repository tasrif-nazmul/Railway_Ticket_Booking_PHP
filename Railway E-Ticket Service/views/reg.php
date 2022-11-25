<?php
if(isset($_GET['err']))
{
    if($_GET['err'] == 'null')
     {
         echo "Must be filled all info...";
     }
     else if($_GET['err'] == 'exist')
     {
         echo "The username or email are already exist.....";
     }

    else if($_GET['err'] == 'incorrect')
    {
        echo "Password and Confirm password must be same...";
    }

    else if($_GET['err'] == 'invalidpass')
    {
        echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    }
}


?>
<html>
<head>
    <title>Registration</title>
</head>
<body>
<center>
<form action="../controllers/regC.php" method ="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../assects/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="home.php">Home</a> |
                    <a href="login.php">Login</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    <fieldset>
                        <table>
                            <tr>
                                <td>
                                    Name 
                                </td>
                                <td>
                                    <input type="text" name="name"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    <input type="email" name="email"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Username 
                                </td>
                                <td>
                                    <input type="text" name="username"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password 
                                </td>
                                <td>
                                    <input type="password" name="password"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Password
                                </td>
                                <td>
                                    <input type="password" name="ConfirmPassword"><br>
                                </td>
                            </tr>
                        </table>
                        <fieldset>
                            <legend align="center">Gender</legend>
                            <input type="radio" name="gender" value="male"/> Male 
                            <input type="radio" name="gender" value="female"/> Female 
                            <input type="radio" name="gender" value="other"/> Other
                        </fieldset>
                        
                        <fieldset>
                            <legend  align="center">Date of Birth</legend>
                            <input type="date" name="dob"> 
                        </fieldset>
                        
                        <br>
                        <input type="submit" name="btn" value="Submit"/>
                        <input type="reset" name="reset" placeholder="Reset">
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