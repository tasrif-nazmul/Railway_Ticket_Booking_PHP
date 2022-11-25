<?php

require_once "db.php";

function login($user)
{
    $con = getConnection();
    $sql = "select * from users where Username='{$user['username']}' and Password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if($count > 0)
    {
        return true;
    }else
    {
        return false;
    }
}
function loginAdmin($admin)
{
    $con = getConnection();
    $sql = "select * from admin where Username='{$admin['username']}' and Password='{$admin['password']}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if($count > 0)
    {
        return true;
    }else
    {
        return false;
    }
}
function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into users values('','{$user['name']}', '{$user['email']}', '{$user['username']}', '{$user['password']}', '{$user['ConfirmPassword']}', '{$user['gender']}', '{$user['dob']}')";
    $status = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($status);
    return $status;
    
}
function insertAdmin($admin)
{
    $con = getConnection();
    $sql = "insert into admin values('','{$admin['name']}', '{$admin['email']}', '{$admin['username']}', '{$admin['password']}', '{$admin['ConfirmPassword']}', '{$admin['gender']}', '{$admin['dob']}')";
    $status = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($status);
    return $status;
}
function userExist($username,$email)
{
    $con = getConnection();
    $sql = "select * from users where Username='{$username}' or Email='{$email}'";
    $status = mysqli_query($con, $sql);
    $count = mysqli_num_rows($status);
        // Closing database connection
        $con->close();
    
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
}
function adminExist($username,$email)
{
    $con = getConnection();
    $sql = "select * from admin where Username='{$username}' or Email='{$email}'";
    $status = mysqli_query($con, $sql);
    $count = mysqli_num_rows($status);
        // Closing database connection
        $con->close();
    
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
}

function suspend($row_name)
{
    {
        $con = getConnection();
        $sql = "delete from users where Username='{$row_name}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
}
?>