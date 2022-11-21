<?php
    session_start();
    $class = $_POST['class'];
    $number=0;
    $sitBooked=0;

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['number']))
        {
            $number=$_POST['number'];
        }
    
        $booked_sit=array();
        for ($i=1; $i<=50; $i++)
        {
            if(isset($_POST[$i]))
            {
                //echo "Sit: ".$i. "<br>";
                array_push($booked_sit, $i);
                $sitBooked++;
            }
        }
    }
    

    
    if($class == "" || $sitBooked == 0 || $number == 0)
    {
        header('location: ../views/dhakaToKhulna.php?err=null');
    }
    else if($sitBooked!=$number)
    {
        header('location: ../views/dhakaToKhulna.php?err=wrong');
    }
    // else if($number != $sitNo)
    // {
    //     header('location: dhakaToKhulna.php?err=wrong');
    // }
    
    else
    {
        $_SESSION['booked_sit']=$booked_sit;
        header('location: ../views/nextpage.php');
        //echo "Number: ".$number;
        //echo "sitbooked: ".$sitBooked;
    }

    
    ?>