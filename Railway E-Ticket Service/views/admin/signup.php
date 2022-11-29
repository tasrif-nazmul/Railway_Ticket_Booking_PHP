<?php
if(isset($_GET['err']))
{
    if($_GET['err'] == 'null')
     {
         echo "Must be filled all info...";
     }
     else if($_GET['err'] == 'exist')
     {
         echo "The email or username are already exist...";
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
    <title>Admin Registration</title>
</head>
<body>
<center>
<form action="../../controllers/admin/signupVal.php" method ="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../assects/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="">Home</a> |
                    <a href="signin.php">Login</a> |
                    <a href="">Registration</a>
                </td>
            </tr>
            <tr>
                <td colspan=2 align="center">
                    <fieldset>
                        <table>
                            <tr>
                                <td align="center" colspan="2" id="firstTr"></td>
                            </tr>
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
                                    <input type="password" name="password" id="password" onkeyup="passCheck()"><br>
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
        <script>
            function passCheck()
            {
                let password = document.getElementById('password').value;
                
                if(password.length<8)
                {
                    document.getElementById('firstTr').innerHTML = "Password must be 8 charecter...";
                }
                else if(((password.split('0').length - 1)<1) && ((password.split('1').length - 1)<1) && ((password.split('2').length - 1)<1) && ((password.split('3').length - 1)<1) && ((password.split('4').length - 1)<1) && ((password.split('5').length - 1)<1) && ((password.split('6').length - 1)<1) && ((password.split('7').length - 1)<1) && ((password.split('8').length - 1)<1) && ((password.split('9').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one number...";
                }

                else if(((password.split('!').length - 1)<1) && ((password.split('@').length - 1)<1) && ((password.split('#').length - 1)<1) && ((password.split('$').length - 1)<1) && ((password.split('%').length - 1)<1) && ((password.split('&').length - 1)<1) && ((password.split('*').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one special charecter...";
                }
                
                else if(((password.split('A').length - 1)<1) && ((password.split('B').length - 1)<1) && ((password.split('C').length - 1)<1) && ((password.split('D').length - 1)<1) && ((password.split('E').length - 1)<1) && ((password.split('F').length - 1)<1) && ((password.split('G').length - 1)<1) && ((password.split('H').length - 1)<1) && ((password.split('I').length - 1)<1) && ((password.split('J').length - 1)<1) && ((password.split('K').length - 1)<1) && ((password.split('L').length - 1)<1) && ((password.split('M').length - 1)<1) && ((password.split('N').length - 1)<1) && ((password.split('O').length - 1)<1) && ((password.split('P').length - 1)<1) && ((password.split('Q').length - 1)<1) && ((password.split('R').length - 1)<1) && ((password.split('S').length - 1)<1) && ((password.split('T').length - 1)<1) && ((password.split('U').length - 1)<1) && ((password.split('V').length - 1)<1) && ((password.split('W').length - 1)<1) && ((password.split('X').length - 1)<1) && ((password.split('Y').length - 1)<1) && ((password.split('Z').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one upercase...";
                }
                else if(((password.split('a').length - 1)<1) && ((password.split('b').length - 1)<1) && ((password.split('c').length - 1)<1) && ((password.split('d').length - 1)<1) && ((password.split('e').length - 1)<1) && ((password.split('f').length - 1)<1) && ((password.split('g').length - 1)<1) && ((password.split('h').length - 1)<1) && ((password.split('i').length - 1)<1) && ((password.split('j').length - 1)<1) && ((password.split('k').length - 1)<1) && ((password.split('l').length - 1)<1) && ((password.split('m').length - 1)<1) && ((password.split('n').length - 1)<1) && ((password.split('o').length - 1)<1) && ((password.split('p').length - 1)<1) && ((password.split('q').length - 1)<1) && ((password.split('r').length - 1)<1) && ((password.split('s').length - 1)<1) && ((password.split('t').length - 1)<1) && ((password.split('u').length - 1)<1) && ((password.split('v').length - 1)<1) && ((password.split('w').length - 1)<1) && ((password.split('x').length - 1)<1) && ((password.split('y').length - 1)<1) && ((password.split('z').length - 1)<1))
                {
                    document.getElementById('firstTr').innerHTML = "Use atlest one lowercase...";
                }
                
                else
                {
                    document.getElementById('firstTr').innerHTML = "";
                }
            }
        </script>
    </form>
</center>
</body>
</html>