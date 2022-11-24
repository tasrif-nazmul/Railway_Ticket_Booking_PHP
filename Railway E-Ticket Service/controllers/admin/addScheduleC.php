<?php
    session_start();
    $name=$_POST['name'];
    $type=$_POST['type'];
    $start=$_POST['start'];
    $finish=$_POST['finish'];
    $display=$_POST['display'];

    if(empty($name) || empty($type) || empty($start) || empty($finish))
    {
        $_SESSION['err']="All must be filled up";
        header('location: ..//views/addSchedule.php');
    }
    
        
    else if(empty($display))
    {
            header('location: ../views/viewSchedule.php');
    }
    else if($display == 'Yes')
    {
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql1 ="INSERT INTO `train_schedule`(`name`, `type`, `start`, `finish`) VALUES ('{$name}','{$type}','{$start}','{$finish}')";
        $result1 = mysqli_query($con, $sql1);
        if($result1>0){
            $_SESSION['msg']="Add successful<br>";
            header('location: ../views/dashboard.php');
        }

    }
        
    
?>