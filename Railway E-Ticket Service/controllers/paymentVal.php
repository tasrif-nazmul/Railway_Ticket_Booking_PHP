<?php
session_start();
if (isset($_SESSION['trainname'])) 
{
    $trainname = $_SESSION['trainname']; 
}

$con = mysqli_connect('localhost', 'root', '', 'webtech');
$sql = "select * from train where trainName='{$trainname}'";
$result = mysqli_query($con, $sql);

$data  = mysqli_fetch_assoc($result);
$traindata =['nothing'=>'nothing'];
$traindata =['trainname'=>$data['trainName'], 'fromStation'=>$data['fromStation'],'startTime'=>$data['startTime'], 'toStation'=>$data['toStation'],'arrivalTime'=>$data['arrivalTime'], 'dateOfJourney'=>$data['dateOfJourney'] ];

require_once "../models/trainModel.php";
$username = $_COOKIE['username'];


$result=bookTicket($username, $traindata);
//$result=bookTicket("nazmul", $traindata);
if($result)
{
    header('location: ../views/home.php');
}

?>