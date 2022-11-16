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
    <form action="adminpanel.php" method="post">
        <table border="2px">
            <tr>
                <td width="300px">
                    <img src="../photo/train.jpg" width="30px">Railway E-ticket Service
                </td>
                <td align="left">
                    <a href="dashboard.php">Dashboard</a> |
                    <a href="../logout.php">Logout</a> |
                    <a href="../reg.php">Registration</a>
                </td>
            </tr>
            <?php 

    $lines = file("../user.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $data = array_map(function($v){
        list($name, $email, $username, $password, $confirmpassword, $gendar, $category) = explode("|", $v);
        return ["name" => $name, "email" => $email, "username" => $username, "password"=>$password, "confirmpassword"=>$confirmpassword, "gendar"=>$gendar, "category"=>$category];
    }, $lines);

 

?>
            <table width="200" border="1">
    <tr>
        <td width="855">Name</td>
        <td width="99">Email</td>
        <td width="99">Username</td>
        <td width="99">Password</td>
        <td width="99">Confirm Password</td>
        <td width="99">Gendar</td>
        <td width="99">Category</td>
      

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
echo $user["email"]; 
?>
</td>
<td>
<?php 
echo $user["username"]; 
?>
</td>
<td>
<?php 
echo $user["password"]; 
?>
</td>
<td>
<?php 
echo $user["confirmpassword"]; 
?>
</td>
<td>
<?php 
echo $user["gendar"]; 
?>
</td>
<td>
<?php 
echo $user["category"]; 
?>
</td>

    </tr>
<?php } 
?>
</table>
            <tr>
                <td> <input type="button" value="Back" onclick="history.back()"><br> </td>
                <td colspan=2 align="center">
                    Presented by: Nazmul, Jannat, Aditya, Uma
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>