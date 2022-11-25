<?php

require_once "db.php";
function trainExist($trainName)
{
    $con = getConnection();
    $sql = "select * from traininfo where trainName='{$trainName}'";
    $status = mysqli_query($con, $sql);
    $count = mysqli_num_rows($status);
        // Closing database connection
        $con->close();
    
        if($count > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
}
function addTrain($train)
{
    {
        $con = getConnection();
        $sql = "insert into traininfo values('','{$train['trainName']}','{$train['fromStation']}','{$train['startTime']}', '{$train['toStation']}', '{$train['arrivalTime']}', '{$train['offday']}')";
        $status = mysqli_query($con, $sql);
        //$count = mysqli_num_rows($status);
        return $status;
    }
}
function deleteTrain($row_name)
{
    {
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "delete from traininfo where trainName='{$row_name}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
}
function updateTrain($trainName,$fromStation,$startTime, $toStation,$arrivalTime,$offday,$row_name)
{
    {
        $con = getConnection();
        $sql = "update traininfo set trainName='{$trainName}', fromStation='{$fromStation}',arrivalF='{$startTime}', toStation='{$toStation}',arrivalT='{$arrivalTime}', offday='{$offday}' where trainName='{$row_name}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
}


?>