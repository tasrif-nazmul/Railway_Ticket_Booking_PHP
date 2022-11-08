<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$category = $_POST['category'];


if($category == "user")
{

    $file = fopen('user.txt', 'r');

    $status = false;

    while(!feof($file))
    {

        $data = fgets($file);

        $user = explode("|", $data);

        //print_r($user);

        if(trim($user[1]) == $email && trim($user[2]) == $username)
        {

            //header('location: showPass.php');
            //echo $user[3];
            $_SESSION['password'] = $user[3];
            $status = true;
            header('location: showPass.php');

            break;
        }

    }
    if($status==false)
    {
        header('location: forgottenPass.php?err=invalid');
    }


}

if($category == "admin")
{

    $file = fopen('admin.txt', 'r');

    $status = false;

    while(!feof($file))
    {

        $data = fgets($file);

        $admin = explode("|", $data);

        //print_r($user);

        if(trim($admin[1]) == $email && trim($admin[2]) == $username)
        {

            //header('location: showPass.php');
            //echo $user[3];
            $_SESSION['password'] = $admin[3];
            $status = true;
            header('location: showPass.php');

            break;
        }

    }
    if($status==false)
    {
        header('location: forgottenPass.php?err=invalid');
    }


}
?>