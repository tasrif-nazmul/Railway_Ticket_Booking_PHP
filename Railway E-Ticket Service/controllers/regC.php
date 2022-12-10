<?php
    session_start();
    require_once "../models/userModel.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];


    if($name == "" || $email == "" || $username == "" || $password == "" || $ConfirmPassword == "" || $gender == "" || $dob == "")
    {
        header('location: ../views/reg.php?err=null');
    }

    else if($password!=$ConfirmPassword)
    {
        header('location: ../views/reg.php?err=incorrect');
    }

    
    else if(userExist($username,$email))
    {
        header('location: ../views/reg.php?err=exist');
    }
    else
    {

        $user = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'ConfirmPassword'=>$ConfirmPassword, 'gender'=>$gender, 'dob'=>$dob,];
        $status = insertUser($user);
        if($status)
        {

            header('location: ../views/login.php');
        }
        else
        {
            echo "DB error";
        }
    }
    
?>