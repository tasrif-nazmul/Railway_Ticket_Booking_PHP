<?php
session_start();
$searchTrain = $_POST['searchTrain'];

if($searchTrain == "")
{
    header('location: trainInfo.php?err=null');
}
else if($searchTrain == "sundarban")
{
    header('location: sundarban.php');
}
else if($searchTrain == "chitra")
{
    header('location: Chitra.php');
}
else if($searchTrain == "benapole")
{
    header('location: Benapol.php');
}
else if($searchTrain == "dhumketu")
{
    header('location: Dhumketu.php');
}

?>