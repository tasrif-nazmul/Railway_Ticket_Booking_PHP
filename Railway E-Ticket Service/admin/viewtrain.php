<?php
if(!isset($_COOKIE['status']))
{
    header('location: ../signin.php?err=bad_request');
}
?>

<html>
<head>
    <title>Homepage</title>
</head>
<body>
<center>
    <form action="dashboard.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../photo/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="../home.php">Home</a> |
                    <a href="../signin.php">Login</a> |
                    <a href="../reg.php">Registration</a>
                </td>
            </tr>
            <?php 

                $lines = file("traindetails.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $data = array_map(function($v){
                    list($name, $from, $destination, $offday) = explode(",", $v);
                    return ["name" => $name, "from" => $from, "destination" => $destination, "offday"=>$offday];
                }, $lines);

            ?>
            <table width="200" border="1">
            <tr>
                <td width="85">Name</td>
                <td width="99">From</td>
                <td width="99">Destination</td>
                <td width="99">Offday</td>

            </tr>
<?php foreach($data as $user)

{ ?>
    <tr>
<td height="20">
<?php 
echo $user["name"]; 
?>
</td>
<td>
<?php 
echo $user["from"]; 
?>
</td>
<td>
<?php 
echo $user["destination"]; 
?>
</td>
<td>
<?php 
echo $user["offday"]; 
?>
</td>

    </tr>
<?php } 
?>
</table>
            <tr>
            <br>
            <td> <input type="button" value="Back" onclick="history.back()"> </td><br>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>