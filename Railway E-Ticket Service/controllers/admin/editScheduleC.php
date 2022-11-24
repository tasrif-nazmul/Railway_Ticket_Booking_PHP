<?php

$name= $_POST["name"];
$type= $_POST["type"];
$start= $_POST["start"];
$finish=$_POST["finish"];
$row_name;

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];
}

if($name=="" || $type =="" || $start=="" || $finish=="" )
{

    header('location: editTrain.php?err=null');

}

else{  if($display!="yes"){$display="no";}



        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "update train_schedule set name='{$name}', type='{$type}', start='{$start}', finish='{$finish}' where name='{$row_name}'";
        $status = mysqli_query($con, $sql);
        
        
        if($status){
            header('location: ../views/viewSchedule.php?message=update_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
           echo "Update Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../views/viewSchedule.php?err=update_failed');
        }
}
 




?>