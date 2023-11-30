<?php
session_start();
require_once('../models/trainModel.php');
$from = $_POST['from'];
$to = $_POST['to'];
$doj = $_POST['doj'];


if ($from == "" || $to == "" || $doj == "") 
{
    header('location: ../views/bookTicket.php?err=null');
} 
else if ($from == $to) 
{
    header('location: ../views/bookTicket.php?err=same');
} 

else 
{
    $result = availableTrain($from, $to, $doj);

    if ($result) 
    {
        // Load the view with the data
        // include '../views/availableTrain.php';
        header('location: ../views/AvailableTrain.php');
    }
    else
    {
        header('location: ../views/bookTicket.php?err=dontFound');
    }
}
?>
