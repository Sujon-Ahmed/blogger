<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'blogger';

    $con = new mysqli($host,$user,$pass,$db);

    if($con->connect_error) {
        die('Connected'.$con->connect_error);
    }
?>