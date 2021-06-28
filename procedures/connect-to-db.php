<?php
    $servername = 'localhost';
    $username = 'portfolio';
    $password = 'FQ.XjTBWi7V5Uo)f';
    $dbname = 'portfolio';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die('connection failed: ' . $conn->connect_error);
    }

    //echo 'connected successfully';


    