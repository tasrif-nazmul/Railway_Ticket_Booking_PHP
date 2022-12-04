<?php
require_once'../../models/trainModel.php';
$trainName = $_POST["trainName"];
$fromStation= $_POST["fromStation"];
$startTime= $_POST["startTime"];
$toStation= $_POST["toStation"];
$arrivalTime= $_POST["arrivalTime"];
$doj=$_POST["doj"];
$row_name;

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];
}

if($trainName=="" || $fromStation =="" || $startTime=="" || $toStation == "" || $arrivalTime=="" || $doj=="" )
{

    header('location: ../../views/admin/editSchedule.php?err=null');

}

else
{


        $status = updateSchedule($trainName,$fromStation,$startTime,$toStation,$arrivalTime,$doj,$row_name);
        if($status)
        {
            header('location: ../../views/admin/viewSchedule.php?message=update_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
           echo "Update Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../../views/admin/viewSchedule.php?err=update_failed');
        }
}
 




?>