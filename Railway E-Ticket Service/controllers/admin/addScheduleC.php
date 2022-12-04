<?php
    session_start();
    require_once'../../models/trainModel.php';
    
    $trainName=$_POST['trainName'];
    $fromStation=$_POST['fromStation'];
    $startTime=$_POST['startTime'];
    $toStation=$_POST['toStation'];
    $arrivalTime=$_POST['arrivalTime'];
    $dateOfJourney=$_POST['dateOfJourney'];

    if($trainName == "" || $fromStation == "" || $startTime == "" || $toStation == "" || $arrivalTime == "" || $dateOfJourney == "")
    {
        header('location: ../../views/admin/addSchedule.php?err=null');
    }
    else if($fromStation == $toStation)
    {
        header('location: ../../views/admin/addSchedule.php?err=same');
    }
    
    else if(scheduleExist($trainName))
    {
        header('location: ../../views/admin/addSchedule.php?err=trExist');
    }
        
    else
    {
        $status = trainSchedule($trainName, $fromStation,$startTime,$toStation,$arrivalTime,$dateOfJourney);
        if($status)
        {
            //echo"Added Successful";
            header('location: ../../views/admin/addSchedule.php?success=yes');
        }

    }
        
    
?>