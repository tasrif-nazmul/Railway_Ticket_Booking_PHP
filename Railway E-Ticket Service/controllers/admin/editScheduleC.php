<?php
require_once'../../models/trainModel.php';
$trainName = $_POST["trainName"];
$fromStation= $_POST["fromStation"];
$toStation= $_POST["toStation"];
$doj=$_POST["doj"];
$row_name;

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];
}

if($trainName=="" || $fromStation =="" || $toStation == "" || $doj=="" )
{

    header('location: ../../views/admin/editSchedule.php?err=null');

}

else
{


        $status = updateSchedule($trainName,$fromStation,$toStation,$doj,$row_name);
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