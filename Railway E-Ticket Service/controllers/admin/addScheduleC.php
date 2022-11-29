<?php
    session_start();
    require_once'../../models/trainModel.php';
    
    $trainName=$_POST['trainName'];
    $fromStation=$_POST['fromStation'];
    $toStation=$_POST['toStation'];
    $dateOfJourney=$_POST['dateOfJourney'];

    if($trainName == "" || $fromStation == "" || $toStation == "" || $dateOfJourney == "")
    {
        header('location: ../../views/admin/addSchedule.php?err=null');
    }
    
    else if(scheduleExist($trainName))
    {
        header('location: ../../views/admin/addSchedule.php?err=trExist');
    }
        
    else
    {
        $status = trainSchedule($trainName, $fromStation,$toStation,$dateOfJourney);
        if($status)
        {
            //echo"Added Successful";
            header('location: ../../views/admin/addSchedule.php?success=yes');
        }

    }
        
    
?>