<?php
    session_start();
    require 'connection.php';
    $post_all_sql = "SELECT post.*,users.user_name AS author_name FROM post INNER JOIN users ON post.user_id = users.id  ORDER BY id DESC";

    $all_result = $con->query($post_all_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Home Page</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <a class="navbar-brand text-secondary" href="index.php" title="Blogger Home"><span class="fas fa-blog"></span><strong> Blogger</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" title="News" href="#"><i class="fa fa-globe-asia"><span class="ml-2 news">News</span></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Account Settings" href="#"><i class="fa fa-user"><span class="ml-2 account-settings">Account Settings</span></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Message" href="#"><i class="fa fa-envelope"><span class="ml-2 message">Message</span></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" title="Notifications" id="navbarDropdown" role="button" data-toggle="dropdown" >
                    <i class="fa fa-bell"><span class="ml-2 notifications">Notifications</span></i>
                </a>
                <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">One new friend request</a>
                <a class="dropdown-item" href="#">John posted on your wall</a>
                <a class="dropdown-item" href="#">Jane like your post</a>
                </div>
            </li>
            </ul>
            <a href="login.php"><img src="asset/img/avatar2.png" title="Login" class="avatar2" alt="avatar"></a>
        </div>
    </nav>
    <!-- container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-status">
                    <div class="card-body">
                       <form action="#">
                           <label for="status">Create your status</label>
                        <input name="status" id="status" class="form-control " type="text" placeholder="What's on your mind ?" aria-label=".form-control-sm example"><br>
                        <button type="submit" class="post_btn"><i class="fa fa-pencil-alt"></i> Post</button>
                       </form>
                    </div>
                </div>
                <?php
                    if($all_result->num_rows > 0) {
                        while($post_row = $all_result->fetch_object()) {
                            ?>

                            
                <div class="card card-post mt-3">
                    <div class="card-body">
                        <h5 class="author"><?php echo $post_row->author_name;?> <span class="float-right text-secondary update_time"><?php echo date('M-d-Y h:i A',strtotime($post_row->post_created_at));?></span></h5>
                        <p class="title text-secondary"><?php echo $post_row->post_title;?></p>
                        <hr class="w-25">
                        <p><?php echo $post_row->post_body;?></p>  

                        <button type="submit" class="like_btn"><i class="fas fa-thumbs-up"></i> Like</button>
                       </form>
                       <button type="submit" class="comment_btn"><i class="fas fa-comment"></i> Message</button>
                       </form>

                    </div>
                </div>
                        <?php
                        }
                    }
                ?>

                
            </div>
            <div class="col-md-3">
                <div class="card card-events text-center">
                    <img src="asset/img/forest.jpg" class="card-img-top" alt="forest">
                    <div class="card-body">
                        <p class="card-text"><strong>Holiday</strong><br> Friday 15:00</p>
                        <button class="holiday">Info</button>
                    </div>
                </div>
                <div class="card mt-3 py-3 text-center text-secondary ads">
                   <div class="card-body">
                       <strong>ADS</strong>
                   </div>
                </div>
            </div>
        </div>

        <!-- <div class="row mt-3">
            <div class="col-md-12 col-sm-12 footer">
                <p class="text-center px-2 my-3">&copy;Copyright 2021 All right Reserved. Design by blogger.</p>
            </div>
        </div> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="asset/js/bootstrap.min.js"></script>  
  <script src="asset/js/jquery-3.4.1.min.js"></script>  
</body>
</html>