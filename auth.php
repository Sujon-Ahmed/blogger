<?php
    session_start();
    require 'connection.php';

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_email = $_POST['email'];
        $user_pass = $_POST['password'];

        $sql = "SELECT * FROM `users` WHERE user_email = '$user_email'";

        $result = $con->query($sql);

        if($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
               $id = $row->id;
               $name = $row->name;
               $password = $row->user_pass;
            }
            if($password === md5($user_pass)) {
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;
                header('location:dashboard.php');
            }
            else{
                header('location:login.php?pass=error');
            }
        }
        else{
            header('location:login.php?found=error');
        }
    }


?>