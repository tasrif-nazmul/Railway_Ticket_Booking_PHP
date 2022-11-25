<?php
session_start();
require_once "../models/userModel.php";
$username = $_POST['username'];
$password = $_POST['password'];


if($username == "" || $password == "")
{
    header('location: ../views/login.php?err=null');
}



    $user = ['username'=>$username, 'password'=>$password];
    $status = login($user);
    
    if($status)
    {
        setcookie('status', 'true', time()+3600, '/');
        setcookie('username', $username, time()+3600, '/');
        header('location: ../views/home.php');
    }

    else
    {
        header('location: ../views/login.php?err=invalid');
    }


?>