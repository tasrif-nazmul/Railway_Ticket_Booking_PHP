<?php
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $dob = $_POST['dob'];
    

    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if($name == "" || $email == "" || $username == "" || $password == "" || $ConfirmPassword == "" || $gender == "" || $category == "" || $dob == "")
    {
        header('location: reg.php?err=null');
    }
    else if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) 
    {
        header('location: reg.php?err=invalidpass');
        
    } 
    
    else if($password!=$ConfirmPassword)
    {
        header('location: reg.php?err=incorrect');
    }
    
    else if($category == 'user')
    {
        $user = $name."|".$email."|". $username."|".$password."|".$ConfirmPassword."|".$gender."|".$category."|".$dob."\r\n";

        //$file = fopen('user.txt', 'a');

        //fwrite($file, $user);
        $file = fopen('user.txt', 'r');
        $status=true;
        while(!feof($file))
        {
    
            $data = fgets($file);
    
            $user = explode("|", $data);
    
            //print_r($user);
    
            if(trim($user[2]) == $username && trim($user[1]) == $email)
            {
                $status=false;
                header('location: reg.php?err=exist');
    
            }
            else if(trim($user[2]) == $username)
            {
    
                $status=false;
                header('location: reg.php?err=Uexist');
    
            }
            else if(trim($user[1]) == $email)
            {
                $status=false;
                header('location: reg.php?err=Eexist');
    
            }
    
        }
        if($status==true)
        {
            $file = fopen('user.txt', 'a');
            $user = $name."|".$email."|". $username."|".$password."|".$ConfirmPassword."|".$gender."|".$category."|".$dob."\r\n";
            fwrite($file, $user);
            header('location: signin.php');
            //echo $username .$email;
        }
       
    }

    else if($category == 'admin')
    {
        $admin = $name."|".$email."|". $username."|".$password."|".$ConfirmPassword."|".$gender."|".$category."|".$dob."\r\n";

        //$file = fopen('user.txt', 'a');

        //fwrite($file, $user);
        $file = fopen('admin.txt', 'r');
        $status=true;
        while(!feof($file))
        {
    
            $data = fgets($file);
    
            $admin = explode("|", $data);
    
            //print_r($user);
    
            if(trim($admin[2]) == $username && trim($admin[1]) == $email)
            {
                $status=false;
                header('location: reg.php?err=exist');
    
            }
            else if(trim($admin[2]) == $username)
            {
    
                $status=false;
                header('location: reg.php?err=Uexist');
    
            }
            else if(trim($admin[1]) == $email)
            {
                $status=false;
                header('location: reg.php?err=Eexist');
    
            }
    
        }
        if($status==true)
        {
            $file = fopen('admin.txt', 'a');
            $admin = $name."|".$email."|". $username."|".$password."|".$ConfirmPassword."|".$gender."|".$category."|".$dob."\r\n";
            fwrite($file, $admin);
            header('location: signin.php');
            //echo $username .$email;
        }
       
    }
?>