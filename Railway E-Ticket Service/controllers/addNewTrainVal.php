<?php

    session_start();
    require_once "../models/userModel.php";
    $trainname = $_POST['trname'];
    $Fstation = $_POST['Fstation'];
    $arrivalF = $_POST['arrivalF'];
    $Tstation = $_POST['Tstation'];
    $arrivalT = $_POST['arrivalT'];

    if($trainname == "" || $Fstation == "" || $arrivalF == "" || $Tstation == "" || $arrivalT == "")
    {
        header('location: ../views/addNewTrain.php?err=null');
    }
    else
    {
        $train = ['trname'=>$trainname, 'Fstation'=>$Fstation, 'arrivalF'=>$arrivalF, 'Tstation'=>$Tstation, 'arrivalT'=>$arrivalT];
        $status = addNewTrain($train);
        if($status)
        {

            header('location: ../views/bookTicket.php');
        }
        else
        {
            echo "DB error";
        }
    }

?>