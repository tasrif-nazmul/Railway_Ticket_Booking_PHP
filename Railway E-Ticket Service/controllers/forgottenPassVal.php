<?php
require_once "../models/userModel.php";
$email = $_POST['email'];
$password = $_POST['password'];
$Cpassword = $_POST['Cpassword'];


if($email == "" || $password == "" || $Cpassword == "")
{
    header('location: ../views/forgottenPass.php?err=null');
}
else if(emailExistForUser($email))
{
    header('location: ../views/forgottenPass.php?err=exist');
}
else if($password != $Cpassword)
{
    header('location: ../views/forgottenPass.php?err=different');
}

else{


    $status = forgottenUser($email, $password,$Cpassword);
    
    if($status)
    {
        header('location: ../views/login.php?err=success');
    }

    else
    {
        header('location: ../views/login.php?err=invalid');
    }

}
?>