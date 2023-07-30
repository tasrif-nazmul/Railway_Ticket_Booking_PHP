<?php
    $fromStation = $_POST['fromStation'];
    $toStation = $_POST['toStation'];
    $travelDate = $_POST['travelDate'];


    if($fromStation == "" || $toStation == "" || $travelDate == "")
    {
        header('location: ../../index.php?err=null');
    }
    else if($fromStation == $toStation)
    {
        header('location: ../../index.php?err=same');
    }
    
?>