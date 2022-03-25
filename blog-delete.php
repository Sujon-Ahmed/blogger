<?php
session_start();
require 'connection.php';
if (!isset($_GET['id'])) {
    header('location:login.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `post` WHERE id = $id";

    if ($con->query($sql) == true) {
        header('location:myblog.php');
    }
}


