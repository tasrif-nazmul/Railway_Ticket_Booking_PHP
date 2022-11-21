<?php
session_start();
require_once "../models/userModel.php";
$username = $_POST['username'];
$password = $_POST['password'];
$category = $_POST['category'];


if($username == "" || $password == "" || $category == "")
{
    header('location: ../views/login.php?err=null');
}

else if($category == "user")
{

    // $con = mysqli_connect('localhost', 'root', '', 'webtech');
    // $sql = "select * from users where Username='{$username}' and Password='{$password}'";
    // $result = mysqli_query($con, $sql);
    // $count = mysqli_num_rows($result);

    $user = ['username'=>$username, 'password'=>$password];
    $status = login($user);
    
    if($status)
    {
        setcookie('status', 'true', time()+3600, '/');
        setcookie('username', $username, time()+3600, '/');
        setcookie('category', 'user', time()+3600, '/');
        header('location: ../views/home.php');
    }

    else
    {
        header('location: ../views/login.php?err=invalid');
    }
}

else if($category == "admin")
{

    // $con = mysqli_connect('localhost', 'root', '','webtech');
    // $sql = "select * from admin1 where Username='{$username}' and Password='{$password}'";
    // $result = mysqli_query($con, $sql);
    // $count = mysqli_num_rows($result);
    $admin = ['username'=>$username, 'password'=>$password];
    $status = login($admin);

    if($admin)
    {
        setcookie('status', 'true', time()+3600, '/');
        setcookie('username', $username, time()+3600, '/');
        setcookie('category', 'admin', time()+3600, '/');
        header('location: ../views/dashboard.php');
    }
    

    else
    {
        header('location: ../views/login.php?err=invalid');
    }
}

?>