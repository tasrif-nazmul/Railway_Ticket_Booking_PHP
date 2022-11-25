<?php

 require_once'../../models/userModel.php';

if(isset($_COOKIE['row_name'])){
$row_name=$_COOKIE['row_name'];

        // $con = mysqli_connect('localhost', 'root', '', 'webtech');
        // $sql = "delete from users where Username='{$row_name}'";
        // $status = mysqli_query($con, $sql);
        $status = suspend($row_name);
        if($status){
            header('location: ../../views/admin/viewUser.php?message=suspend_successful');

            setcookie('row_name',$row_name,time()-60,'/');
        }else{
          // echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../../views/admin/viewUser.php?message=suspend_failed');
        }

}

 

else{   


    
          // echo "Delete Failed!";

           setcookie('row_name',$row_name,time()-60,'/');

           header('location: ../views/viewUser.php?err=delete_failed');
        
}