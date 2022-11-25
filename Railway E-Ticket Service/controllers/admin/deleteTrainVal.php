<?php
require_once'../../models/trainModel.php';
 

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];

        $status = deleteTrain($row_name);
        if($status)
        {
            header('location: ../../views/admin/viewtrain.php?message=delete_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
          // echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../../views/admin/viewtrain.php?message=delete_failed');
        }

}

 

else{   


    
          // echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../views/viewtrain.php?err=delete_failed');
        
}