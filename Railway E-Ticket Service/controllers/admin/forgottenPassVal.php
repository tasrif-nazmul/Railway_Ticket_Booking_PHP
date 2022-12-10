<?php
require_once "../../models/userModel.php";
$email = $_POST['email'];
$password = $_POST['password'];
$Cpassword = $_POST['Cpassword'];


if($email == "" || $password == "" || $Cpassword == "")
{
    header('location: ../../views/admin/forgottenPass.php?err=null');
}
else if(emailExistForAdmin($email))
{
    header('location: ../../views/admin/forgottenPass.php?err=exist');
}
else if($password != $Cpassword)
{
    header('location: ../../views/admin/forgottenPass.php?err=different');
}

else{


    $status = forgottenAdmin($email, $password,$Cpassword);
    
    if($status)
    {
        header('location: ../../views/admin/signin.php?err=success');
    }

    else
    {
        header('location: ../../views/admin/signin.php?err=invalid');
    }

}
?>