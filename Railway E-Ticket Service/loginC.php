<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$category = $_POST['category'];


if($username == "" || $password == "" || $category == "")
{
    header('location: signin.php?err=null');
}
// else if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password)
// {
//     $_SESSION['status'] = true;
//     header('location: home.php');
// }
else if($category == "user")
{

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where Username='{$username}' and Password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    
    if($count == 1)
    {
        setcookie('status', 'true', time()+3600, '/');
        setcookie('username', $username, time()+3600, '/');
        setcookie('category', 'user', time()+3600, '/');
        header('location: home.php');
    }

    else
    {
        header('location: signin.php?err=invalid');
    }
}

else if($category == "admin")
{

    $con = mysqli_connect('localhost', 'root', '','webtech');
    $sql = "select * from admin1 where Username='{$username}' and Password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {
        setcookie('status', 'true', time()+3600, '/');
        setcookie('username', $username, time()+3600, '/');
        setcookie('category', 'admin', time()+3600, '/');
        header('location: admin/dashboard.php');
    }
    

    else
    {
        header('location: signin.php?err=invalid');
    }
}

?>