<?php

$name= $_POST["name"];
$fromStation= $_POST["fromStation"];
$toStation= $_POST["toStation"];
$offday=$_POST["offday"];
$row_name;

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];
}

if($name=="" || $fromStation =="" || $toStation=="" || $offday=="" )
{

    header('location: editTrain.php?err=null');

}

else{  if($display!="yes"){$display="no";}



        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "update train_details set name='{$name}', fromStation='{$fromStation}', toStation='{$toStation}', offday='{$offday}' where name='{$row_name}'";
        $status = mysqli_query($con, $sql);
        
        
        if($status){
            header('location: ../views/viewtrain.php?message=update_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
           echo "Update Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../views/viewtrain.php?err=update_failed');
        }
}
 




?>