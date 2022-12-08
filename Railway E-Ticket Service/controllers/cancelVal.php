<?php
  require_once'../models/trainModel.php';
 

  if(isset($_COOKIE['row_name']))
  {
    $row_name=$_COOKIE['row_name'];

      $status = cancelTicket($row_name);
      if($status)
      {
          header('location: ../views/cancelTicket.php?message=cancel_successful');

          setcookie('row_name',$row_name,time()-60,'/');
      }else{
        // echo "Delete Failed!";

          setcookie('row_name',$row_name,time()-60,'/');

          header('location: ../views/cancelTicket.php?message=cancel_failed');
      }

  }

 

  else
  {   

    setcookie('row_name',$row_name,time()-60,'/');
    header('location: ../views/cancelTicket.php?err=cancel_failed');
          
  }
?>