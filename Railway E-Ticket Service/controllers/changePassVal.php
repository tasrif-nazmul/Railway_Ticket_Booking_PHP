<?php
require_once "../models/userModel.php";
$oldPassword = $_POST['password'];
$newPassword = $_POST['newPassword'];
$Cpassword = $_POST['Cpassword'];
$username = $_COOKIE['username'];

if($oldPassword == "" || $newPassword == "" || $Cpassword == "")
{
    header('location: ../views/changePass.php?err=null');
}

$conn = mysqli_connect('localhost','root','','webtech');
$sqll = "select Password from users where Username = '{$username}' and Password = '{$oldPassword}'";
$query = mysqli_query($conn,$sqll);
//$row = mysqli_num_rows($query);

if(mysqli_num_rows($query)!=1)
{
    header('location: ../views/changePass.php?err=notMatch');
}



else if($newPassword != $Cpassword)
{
    header('location: ../views/changePass.php?err=different');
}

else{


    $con = mysqli_connect('localhost','root','','webtech');
    $sql = "UPDATE `users` SET `Password` = '{$newPassword}', `ConfirmPassword` = '{$Cpassword}' WHERE `Username` = '{$username}'";
    $status = mysqli_query($con, $sql);
    
    if($status)
    {
        header('location: ../views/changePass.php?err=resetSuccess');
    }

    else
    {
        header('location: ../views/changePass.php?err=invalid');
    }

}
?>