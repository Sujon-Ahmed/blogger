<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header('location:login.php');
    }
       
    require 'connection.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

       $sql = "SELECT * FROM `users` WHERE id = '$id'";
        $result = $con->query($sql);

      /*   $sql = "SELECT users.*,post.user_id AS log_name FROM users INNER JOIN post ON users.user_name = post.user_id";
        $result = $con->query($sql);
        $user_id = $_SESSION['id'];
        $user = "SELECT * FROM `post` WHERE id = '$user_id'";
        $user_data = $con->query($user); 
    
        if($user_data->num_rows > 0){
            while($data = $user_data->fetch_object()) {
                $us_id = $data->id;
                $user_name = $data->name;
                $user_email = $data->email;
            }
        }*/

        if($result->num_rows > 0) {
            while($row = $result->fetch_object()){
                $id = $row->id;
                $user_name = $row->user_name;
                $user_email = $row->user_email;
                $user_phone = $row->user_phone;
                $date_of_bath = $row->date_of_bath;
                $user_pass = $row->user_pass;
                $user_about = $row->user_about;
                $user_created_at = $row->user_created_at;
            }
        }

    }

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
        <a class="navbar-brand text-secondary" href="#"><span class="fas fa-blog"></span><strong> MyBlog</strong></a>
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
                    <i class="fa fa-bell"><sup class="badge badge-success badge-pill">3</sup><span class="ml-2 notifications">Notifications</span></i>
                </a>
                <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">One new friend request</a>
                <a class="dropdown-item" href="#">John posted on your wall</a>
                <a class="dropdown-item" href="#">Jane like your post</a>
                </div>
            </li>
            </ul>
            <a href="dashboard.php"><img src="asset/img/avatar2.png" title="My Dashboard" class="avatar2" alt="avatar"></a>
        </div>
    </nav>

    <!-- container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <!-- profile -->
                <div class="card  border-0 card-profile">
                    <div class="card-header text-center">
                        <h5>My Profile</h5>
                    </div>
                    <img src="asset/img/avatar3.png" class="card-img-top " alt="...">
                    <span class="hr"></span>
                    <h5 class="text-center"><?php echo $user_name; ?></h5>
                    <div class="card-body">
                        <p><i class="fa fa-envelope mr-2"></i> <?php echo $user_email; ?></p>
                        <p><i class="fa fa-phone-alt mr-2"></i> <?php echo $user_phone; ?></p>
                        <p><i class="fa fa-birthday-cake mr-2"></i> <?php echo $date_of_bath; ?></p>
                    </div>
                </div>

                <!-- Accordion -->
                <div class="accordion mb-3 mt-3" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                <span><i class="fa fa-users mr-1"> </i> My Group</span>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>Hello There, <br> This is my blog site group please join my group.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                <span><i class="fa fa-calendar-check-o mr-1"> </i> My Events</span>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>I have many events in my life, so i will share some events with others. So, vew my all events.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <span><i class="fa fa-image mr-1"> </i> My Photos</span>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <figure class="figure">
                                    <img src="asset/img/mountains.jpg" class="figure-img img-fluid rounded" alt="...">
                                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                                </figure>
                                <figure class="figure">
                                    <img src="asset/img/nature.jpg" class="figure-img img-fluid rounded" alt="...">
                                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interests -->
                <div class="card interests mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Interests</h5>
                        <p class="card-text"> 
                            <a href="#" class="newspaper">News</a> 
                            <a href="#" class="coding">Coding</a> 
                            <a href="#" class="game">Game</a> 
                            <a href="#" class="friends">Friends</a> 
                            <a href="#" class="design">Design</a>
                            <a href="#" class="travel">Travel</a>
                            <a href="#" class="photo">Photos</a>
                            <a href="#" class="food">Food</a>
                        </p>
                    </div>
                </div>

                <!-- Alert -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <br>People are looking at your profile. Find out who.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            </div>
            <div class="col-md-7">
                <div class="card card-status">
                    <div class="card-body">
                       <form action="#">
                           <label for="status">Create your status</label>
                        <input name="status" id="status" class="form-control " type="text" placeholder="Whats on your mind ,<?php echo $user_name;?>" aria-label=".form-control-sm example"><br>
                        <button type="submit" class="post_btn"><i class="fa fa-pencil-alt"></i> Post</button>
                       </form>
                    </div>
                </div>

                <div class="card card-post mt-3">
                    <div class="card-body">
                        <h5 class="author"><?php echo $user_name;?> <span class="float-right text-secondary update_time"><?php echo date('M-d-Y h:i A',strtotime($user_created_at));?></span></h5>
                        <p class="title text-secondary">Title Here</p>
                        <hr class="w-25">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cupiditate non eveniet voluptates natus ipsa odio corrupti asperiores! Temporibus et nam dolores nesciunt magni dolorem.</p>  

                        <button type="submit" class="like_btn"><i class="fas fa-thumbs-up"></i> Like</button>
                       </form>
                       <button type="submit" class="comment_btn"><i class="fas fa-comment"></i> Message</button>
                       </form>

                    </div>
                </div>
                <div class="card card-post mt-3">
                    <div class="card-body">
                        <h5 class="author"><?php echo $user_name;?> <span class="float-right text-secondary update_time"><?php echo date('M-d-Y h:i A',strtotime($user_created_at));?></span></h5>
                        <p class="title text-secondary">Title Here</p>
                        <hr class="w-25">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cupiditate non eveniet voluptates natus ipsa odio corrupti asperiores! Temporibus et nam dolores nesciunt magni dolorem.</p>  

                        <button type="submit" class="like_btn"><i class="fas fa-thumbs-up"></i> Like</button>
                       </form>
                       <button type="submit" class="comment_btn"><i class="fas fa-comment"></i> Message</button>
                       </form>

                    </div>
                </div>

                
            </div>
            <div class="col-md-2">
                <div class="card card-events text-center">
                    <img src="asset/img/forest.jpg" class="card-img-top" alt="forest">
                    <div class="card-body">
                        <p class="card-text"><strong>Holiday</strong><br> Friday 15:00</p>
                        <button class="holiday">Info</button>
                    </div>
                </div>
                <div class="card friend-request text-center mt-3">
                    <div class="card-header mb-3">Friend Request</div>
                    <img src="asset/img/avatar5.png" class="card-img-center m-auto" alt="forest">
                    <div class="card-body">
                        <p class="card-text">Jane Doe</p>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-warning btn-sm text-light"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 py-3 text-center text-secondary ads">
                   <div class="card-body">
                       <strong>ADS</strong>
                   </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 col-sm-12 footer">
                <p class="text-center px-2 my-3">&copy;Copyright 2021 All right Reserved. Design by Blogger</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="asset/js/bootstrap.min.js"></script>  
  <script src="asset/js/jquery-3.4.1.min.js"></script>  
</body>
</html>