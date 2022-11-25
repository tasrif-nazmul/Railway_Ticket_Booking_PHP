<?php
require_once'../../models/trainModel.php';
$trainName = $_POST["trainName"];
$fromStation= $_POST["fromStation"];
$startTime= $_POST["startTime"];
$toStation= $_POST["toStation"];
$arrivalTime= $_POST["arrivalTime"];
$offday=$_POST["offday"];
$row_name;

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];
}

if($trainName=="" || $fromStation =="" || $startTime == ""|| $toStation=="" || $toStation == "" || $offday=="" )
{

    header('location: ../../views/admin/editTrain.php?err=null');

}

else
{



        // $con = mysqli_connect('localhost', 'root', '', 'webtech');
        // $sql = "update traininfo set trainName='{$trainName}', fromStation='{$fromStation}',arrivalF='{$startTime}', toStation='{$toStation}',arrivalT='{$arrivalTime}', offday='{$offday}' where trainName='{$row_name}'";
        // $status = mysqli_query($con, $sql);

        //$updateTrain = ['trainName'=>$trainName, 'fromStation'=>$fromStation, 'arrivalF'=>$startTime,'toStation'=>$toStation,'arrivalT'=>$arrivalTime,'offday'=>$offday,];

        $status = updateTrain($trainName,$fromStation,$startTime, $toStation,$arrivalTime,$offday,$row_name);
        if($status)
        {
            header('location: ../../views/admin/viewtrain.php?message=update_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
           echo "Update Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../../views/admin/viewtrain.php?err=update_failed');
        }
}
 




?>