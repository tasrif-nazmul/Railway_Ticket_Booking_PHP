<?php
if(!isset($_COOKIE['status']))
{
    header('location: ../signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Train Details Insertion</title>
</head>
<body>
<center>
<form action="../controllers/addTrVal.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../photo/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="dashboard.php">Dashboard</a> |
                    <a href="../logout.php">Logout</a> |
                    <a href="reg.php">Registration</a>
                </td>
            </tr>
            <tr>
            <td colspan=2 align="center">
                    <fieldset>
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
                                    <input type="text" name="from"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Destination
                                </td>
                                <td>
                                    <input type="text" name="destination"><br>
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

                        </table>
                       
                       
                        
                        <br>
                        <button type="submit">Insert Details</button>
                        <input type="button" value="Back" onclick="history.back()">
                        
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
                              