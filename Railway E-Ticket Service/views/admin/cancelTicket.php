<?php
if(!isset($_COOKIE['adminStatus']))
{
    header('location: ../login.php?err=bad_request');
}
?>