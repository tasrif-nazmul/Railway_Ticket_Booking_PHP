<?php

require_once('bookTicketModel.php');

function showBookTicketPage() {
    if (!isset($_COOKIE['status'])) {
        header('location: login.php?err=bad_request');
        exit();
    }

    $username = $_COOKIE['username'];
    $errMessage = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn'])) {
        $from = $_POST['from'];
        $to = $_POST['to'];
        $doj = $_POST['doj'];

        $result = availableTrain($from, $to, $doj);
    }

    require('bookTicketView.php');
}

showBookTicketPage();
?>
