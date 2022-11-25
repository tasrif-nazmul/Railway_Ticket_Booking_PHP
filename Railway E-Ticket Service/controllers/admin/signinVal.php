<?php
session_start();
require_once "../../models/userModel.php";
$username = $_POST['username'];
$password = $_POST['password'];

$admin = ['username'=>$username, 'password'=>$password];
$adminStatus = loginAdmin($admin);

if($username == "" || $password == "")
{
    header('location: ../../views/admin/signin.php?err=null');
}



else if($adminStatus)
{
    setcookie('adminStatus', 'true', time()+3600, '/');
    setcookie('username', $username, time()+3600, '/');
    header('location: ../../views/admin/dashboard.php');
}


else
{
    header('location: ../../views/admin/signin.php?err=invalid');
}


?>