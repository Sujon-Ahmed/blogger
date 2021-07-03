<?php
    require 'connection.php';

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        function input_test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $user_id = $_POST['user_id'];
        $post_title = input_test($_POST['title']);
        $post_body = input_test($_POST['body']);
      

        if($user_id != '' && $post_title != '' && $post_body!= '') {
            $sql = "INSERT INTO `post`(`user_id`, `post_title`, `post_body`) VALUES ('$user_id','$post_title','$post_body')";
         
            if($con->query($sql) == true) {
                header('location:index.php?insert=success');
            }
            else{
                echo 'Something Went Wrong!';
            }
        }
        else{
            header('location:dashboard.php?valid=error');
        }
    }
    else{
        header('location:dashboard.php');
    }

?>