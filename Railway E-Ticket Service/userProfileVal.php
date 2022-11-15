<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$dob = $_POST['dob'];
$row_name;

if(isset($_COOKIE['row_name']))
{
    $row_name=$_COOKIE['row_name'];
}


if($status){
    header('location: userprofile.php');

    setcookie('row_name',$row_name,time()-60,'/');
}   
    
?>