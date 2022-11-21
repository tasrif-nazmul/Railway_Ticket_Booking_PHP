<?php
    session_start();
    //require_once "../models/userModel.php";
    $trainname = $_POST['trname'];
    $Fstation = $_POST['Fstation'];
    $arrivalF = $_POST['arrivalF'];
    $Tstation = $_POST['Tstation'];
    $arrivalT = $_POST['arrivalT'];

    if($from == "" || $to == "" || $doj == "")
    {
        header('location: ../views/bookTicket.php?err=null');
    }
    else if($from==$to)
    {
        header('location: ../views/bookTicket.php?err=wrong');
    }
    else
    {
        header('location: ../views/availableTrain.php');
        
    }
    
    ?>