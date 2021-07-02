<?php 
    require 'connection.php';

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        function input_test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user_name = input_test($_POST['user_name']);
        $user_email = input_test($_POST['user_email']);
        $user_phone = input_test($_POST['user_phone']);
        $date_of_bath  = input_test($_POST['date_of_bath']);
        $user_pass = input_test($_POST['user_pass']);
        $user_about = input_test($_POST['user_about']);
        $enc_pass = md5($user_pass);

        if($user_name != '' && $user_email != '' && $user_phone != '' && $date_of_bath != '' && $user_pass != '' && $user_about != '') {
            $sql = "INSERT INTO `users`(`user_name`,`user_email`, `user_phone`, `date_of_bath`, `user_pass`, `user_about`) VALUES ('$user_name','$user_email','$user_phone','$date_of_bath','$enc_pass','$user_about')";
         
            if($con->query($sql) == true) {
                header('location:myblog.php?id='.$id.'insert=success');
            }
            else{
                echo 'Something Went Wrong!';
            }
        }
        else{
            header('location:register.php?valid=error');
        }
    }
    else{
        header('location:register.php');
    }



?>