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
function bookTicket($username, $traindata)
{
    {
        $con = getConnection();
        $sql = "insert into ticketbook values('','{$username}','{$traindata['trainname']}', '{$traindata['fromStation']}','{$traindata['startTime']}', '{$traindata['toStation']}','{$traindata['arrivalTime']}', '{$traindata['dateOfJourney']}')";
        echo $sql. "<br>";
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
function deleteSchedule($row_name)
{
    {
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "delete from train where trainName='{$row_name}'";
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
function updateSchedule($trainName,$fromStation,$startTime,$toStation,$arrivalTime,$doj,$row_name)
{
    {
        $con = getConnection();
        $sql = "update train set trainName='{$trainName}', fromStation='{$fromStation}',startTime='{$startTime}', toStation='{$toStation}',arrivalTime='{$arrivalTime}', dateOfJourney='{$doj}' where trainName='{$row_name}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
}
function traininfo($searchTrain)
{
    {
        $con = getConnection();
        $sql = "select * from `traininfo` where id = '$searchTrain' or trainName = '$searchTrain'";
        $result = mysqli_query($con, $sql);
        $rowNum = mysqli_fetch_assoc($result);
        $status = mysqli_num_rows($result);
        return $status;
    }
}
function traininfoo($searchTrain)
{
    {
        $con = getConnection();
        $sql = "select * from `traininfo` where id = '$searchTrain' or trainName = '$searchTrain'";
        $result = mysqli_query($con, $sql);
        $rowNum = mysqli_fetch_assoc($result);
        return $rowNum;
    }
}
function trainSchedule($trainName, $fromStation,$startTime,$toStation,$arrivalTime,$dateOfJourney)
{
    {
        $con = getConnection();
        $sql = "insert into train values('','$trainName','$fromStation','$startTime','$toStation','$arrivalTime','$dateOfJourney')";
        $status = mysqli_query($con, $sql);
        //$count = mysqli_num_rows($status);
        return $status;
    }
}

function scheduleExist($trainName)
{
    $con = getConnection();
    $sql = "select * from train where trainName='{$trainName}'";
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
function availableTrain($from,$to,$doj)
{
    {
        $con = getConnection();
        $sql = "select * from `train` where fromStation = '$from' and toStation = '$to' and dateOfJourney = '$doj'";
        $result = mysqli_query($con, $sql);
        return $result;
    }
}
function availableTrainn($from,$to,$doj)
{
    {
        $con = getConnection();
        $sql = "select * from `train` where fromStation = '$from' and toStation = '$to' and dateOfJourney = '$doj'";
        //echo $sql."<br>";
        $result = mysqli_query($con, $sql);
        $rowNum = mysqli_fetch_assoc($result);
        return $rowNum;
    }
}




?>