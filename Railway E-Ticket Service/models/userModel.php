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
function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into users values('','{$user['name']}', '{$user['email']}', '{$user['username']}', '{$user['password']}', '{$user['ConfirmPassword']}', '{$user['gender']}','{$user['category']}', '{$user['dob']}')";
    $status = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($status);
    return $status;
}
function insertAdmin($admin)
{
    $con = getConnection();
    $sql = "insert into admin values('','{$admin['name']}', '{$admin['email']}', '{$admin['username']}', '{$admin['password']}', '{$admin['ConfirmPassword']}', '{$admin['gender']}','{$admin['category']}', '{$admin['dob']}')";
    $status = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($status);
    return $status;
}
function insertTicket($ticket)
{
    $con = getConnection();
    $sql = "insert into ticketbook values('','{$ticket['from']}', '{$ticket['to']}', '{$ticket['doj']}')";
    $status = mysqli_query($con, $sql);
    //$count = mysqli_num_rows($status);
    return $status;
}
function addNewTrain($train)
{
    {
        $con = getConnection();
        $sql = "insert into traininfo values('','{$train['trname']}','{$train['Fstation']}','{$train['arrivalF']}', '{$train['to']}', '{$train['arrivalT']}')";
        $status = mysqli_query($con, $sql);
        //$count = mysqli_num_rows($status);
        return $status;
    }
}

?>