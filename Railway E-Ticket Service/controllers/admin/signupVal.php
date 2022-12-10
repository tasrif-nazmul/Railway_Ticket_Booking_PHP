<?php
    session_start();
    require_once "../../models/userModel.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];


    if($name == "" || $email == "" || $username == "" || $password == "" || $ConfirmPassword == "" || $gender == "" || $dob == "")
    {
        header('location: ../../views/admin/signup.php?err=null');
    }

    else if($password!=$ConfirmPassword)
    {
        header('location: ../../views/admin/signup.php?err=incorrect');
    }

    
    else if(adminExist($username,$email))
    {
        header('location: ../../views/admin/signup.php?err=exist');
    }
    else
    {

        $admin = ['name'=>$name, 'email'=>$email, 'username'=>$username, 'password'=>$password, 'ConfirmPassword'=>$ConfirmPassword, 'gender'=>$gender, 'dob'=>$dob,];
        $status = insertAdmin($admin);
        if($status)
        {

            header('location: ../../views/admin/signin.php');
        }
        else
        {
            echo "DB error";
        }
    }
    
?>