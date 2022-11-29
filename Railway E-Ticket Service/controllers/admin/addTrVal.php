<?php
    session_start();
    require_once'../../models/trainModel.php';
    
    $trainName=$_POST['trainName'];
    $fromStation=$_POST['fromStation'];
    $startTime=$_POST['startTime'];
    $toStation=$_POST['toStation'];
    $arrivalTime=$_POST['arrivalTime'];
    $offday=$_POST['offday'];

    if($trainName == "" || $fromStation == "" || $startTime == "" || $toStation == "" || $arrivalTime == "" || $offday == "")
    {
        header('location: ../../views/admin/addTr.php?err=null');
    }
    
    else if(trainExist($trainName))
    {
        header('location: ../../views/admin/addTr.php?err=trExist');
    }
        
    else
    {
        $train = ['trainName'=>$trainName,'fromStation'=>$fromStation,'startTime'=>$startTime,'toStation'=>$toStation,'arrivalTime'=>$arrivalTime,'offday'=>$offday, ];
        $status = addTrain($train);
        if($status)
        {
            //echo"Added Successful";
            header('location: ../../views/admin/addTr.php?success=yes');
        }

    }
        
    
?>