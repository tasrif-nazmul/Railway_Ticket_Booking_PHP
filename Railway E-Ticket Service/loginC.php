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

    $file = fopen('user.txt', 'r');

    $status = false;

    while(!feof($file))
    {

        $data = fgets($file);

        $user = explode("|", $data);

        //print_r($user);

        if(trim($user[2]) == $username && trim($user[3]) == $password)
        {

            setcookie('status', 'true', time()+3600, '/');
            setcookie('userid', $username, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');

            $status = true;

        }

    }

   

    if($status)
    {

        header('location: home.php');

    }
    else
    {
        header('location: signin.php?err=invalid');
    }
}

else if($category == "admin")
{

    $file = fopen('admin.txt', 'r');

    $status = false;

    while(!feof($file)){

        $data = fgets($file);

        $admin = explode("|", $data);

        if(trim($admin[2]) == $username && trim($admin[3]) == $password)
        {

            setcookie('status', 'true', time()+3600, '/');
            setcookie('userid', $username, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');

            $status = true;

        }

    }

   

    if($status)
    {

        header('location: admin/dashboard.php');

    }
    else
    {
        header('location: signin.php?err=invalid');
    }
}

?>