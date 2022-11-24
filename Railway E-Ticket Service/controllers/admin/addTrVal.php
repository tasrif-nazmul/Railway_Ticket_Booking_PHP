<?php
    session_start();
    require_once'../../models/userModel.php';
    
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
    
        
    else
    {
        // $con = mysqli_connect('localhost', 'root', '', 'webtech');
        // $sql1 ="INSERT INTO `train_details`(`name`, `fromStation`, `toStation`, `offday`) VALUES ('{$trainName}','{$fromStation}','{$toStation}','{$offday}')";
        // $result1 = mysqli_query($con, $sql1);
        $train = ['trainName'=>$trainName,'fromStation'=>$fromStation,'startTime'=>$startTime,'toStation'=>$toStation,'arrivalTime'=>$arrivalTime,'offday'=>$offday, ];
        $status = addTrain($train);
        if($status)
        {
            echo"Added Successful";
        }

    }
        
    
?>