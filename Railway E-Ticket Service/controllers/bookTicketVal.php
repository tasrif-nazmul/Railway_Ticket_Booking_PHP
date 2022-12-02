<?php
    session_start();
    $from = $_POST['from'];
    $to = $_POST['to'];
    $doj = $_POST['doj'];

    if($from == "" || $to == "" || $doj == "")
    {
        header('location: ../views/bookTicket.php?err=null');
    }
    else if($from==$to)
    {
        header('location: ../views/bookTicket.php?err=wrong');
    }

    
    
    ?>