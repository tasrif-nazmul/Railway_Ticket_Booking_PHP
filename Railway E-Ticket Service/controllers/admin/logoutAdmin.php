<?php 

    //session_start();
    //session_destroy();
    setcookie('adminStatus', 'true', time()-10, '/');
    header('location: ../../views/admin/signin.php');

?>