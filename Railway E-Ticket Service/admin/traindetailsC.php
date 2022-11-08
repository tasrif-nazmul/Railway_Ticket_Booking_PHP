<?php
    session_start();
    $name = $_POST['name'];
    $from = $_POST['from'];
    $destination = $_POST['destination'];
    $offday = $_POST['offday'];
  

    if($name == "" || $from == "" || $destination == ""  || $offday == "" )
    {
        header('location: ticketbuy.php?err=null');
    }
    else if($from==$destination)
    {
        header('location: ticketbuy.php?err=source&destination_error');
    }
 
    else{
        $user2 = $name.",".$from.",".$destination.",".$offday."\r\n";

        $file = fopen('traindetails.txt', 'a');

        fwrite($file, $user2);

        echo "Ticket details Inserted Successfully.";

        header('location: dashboard.php');
       
    }
?>