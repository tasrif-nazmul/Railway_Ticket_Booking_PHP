<?php

    $host = "localhost";
    $dbname = "webtech";
    $dbpass = "";
    $dbuser = "root";

    function getConnection()
    {
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;
        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }


?>