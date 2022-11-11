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
    
    else if($category == 'admin')
    {
            $con = mysqli_connect('localhost', 'root', '','webtech');
            $sql = "insert into admin1 values('{$name}', '{$email}','{$username}','{$password}','{$ConfirmPassword}','{$gender}','{$category}','{$dob}')";
            $status = mysqli_query($con, $sql);
            
    
             if($status)
            {
                
                header('location: signin.php');
            }
            else
            {
                echo "DB error";
            }
        

    }

    else if($category == 'user')
    {
            $con = mysqli_connect('localhost', 'root', '','webtech');
            $sql = "insert into users values('{$name}', '{$email}','{$username}','{$password}','{$ConfirmPassword}','{$gender}','{$category}','{$dob}')";
            $status = mysqli_query($con, $sql);
            
    
             if($status)
            {
                
                header('location: signin.php');
            }
            else
            {
                echo "DB error";
            }
        

    }
?>