<?php

 

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];

        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "delete from train_details where name='{$row_name}'";
        $status = mysqli_query($con, $sql);
        
        if($status){
            header('location: ../views/viewtrain.php?message=delete_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
          // echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../views/viewtrain.php?message=delete_failed');
        }

}

 

else{   


    
          // echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../views/viewtrain.php?err=delete_failed');
        
}