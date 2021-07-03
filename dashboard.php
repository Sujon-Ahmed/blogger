<?php
   session_start();
   if(!isset($_SESSION['id'])) {
       header('location:login.php');
   }
    require 'connection.php';

    $sql = "SELECT * FROM `users`";
    $result = $con->query($sql);


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
        <a class="navbar-brand text-secondary" href="#" title="Blogger Home"><span class="fas fa-edit"></span><strong> Dashboard</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div><a href="logout.php" onclick="javascript:return confirm('Are you sure? leave this page.')"><img src="asset/img/avatar2.png" title="Log Out" class="author" alt="avatar"> </a><span class="mr-5"></span></div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row mt-5 d-flex align-items-start">
            <div class="col-md-2 mt-5">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Users</button>

                    <button class="nav-link" id="v-pills-view_post-tab" data-bs-toggle="pill" data-bs-target="#v-pills-view_post" type="button" role="tab" aria-controls="v-pills-view_post" aria-selected="false">View Post</button>

                    <button class="nav-link" id="v-pills-created_post-tab" data-bs-toggle="pill" data-bs-target="#v-pills-created_post" type="button" role="tab" aria-controls="v-pills-created_post" aria-selected="false">Create Post</button>

                    <button class="nav-link" id="v-pills-change_password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-change_password" type="button" role="tab" aria-controls="v-pills-change_password" aria-selected="false">Change Password</button>

                </div>
            </div>
            <div class="col-md-10 mt-5">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="col-md-12">
                               <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>user_name</th>
                                            <th>user_email</th>
                                            <th>created_at</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($result->num_rows > 0) {
                                            while($row = $result->fetch_object()) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row->id;?></td>
                                                        <td><?php echo $row->user_name;?></td>
                                                        <td><?php echo $row->user_email;?></td>
                                                        <td><?php echo date('M-d-Y h:i A',strtotime($row->user_created_at));?></td>
                                                        <td>
                                                        <a href="edit_profile.php?id=<?php echo $row->id;?>" class="btn btn-info btn-sm">Update</a>

                                                        <a href="myblog.php?id=<?php echo $row->id;?>" class="btn btn-success btn-sm">Profile</a>

                                                        <a onclick="javascript:return confirm('Are You Sure? Permanently Delete this Record!')" href="delete.php?id=<?php echo $row->id;?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                    ?>
                                    </tbody>
                               </table>                         
                        </div>
                                              
                    </div>

                    <div class="tab-pane fade" id="v-pills-view_post" role="tabpanel" aria-labelledby="v-pills-view_post-tab">    
                        <div class="col-md-12">                  
                            <div class="card card-post mt-3">
                                <div class="card-body">
                                    <h5 class="author">Author Name<span class="float-right text-secondary update_time">1 min</span></h5>
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
                    </div>

                    <div class="tab-pane fade" id="v-pills-created_post" role="tabpanel" aria-labelledby="v-pills-created_post-tab">
                        <div class="col-md-12">
                            <div class="card card-status">
                                <div class="card-body">
                                <form action="post_insert.php" method="POST">
                                    <label for="status">Create your status</label>
                                    <input name="title" id="status" class="form-control " type="text" placeholder="Enter your post title" aria-label=".form-control-sm example"><br>
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'];?>">
                                    <textarea name="body" placeholder="Whats on your mind" class="form-control" cols="30" rows="5"></textarea><br>
                                    <input type="submit" name="submit" value="submit" class="post_btn"> 
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-change_password" role="tabpanel" aria-labelledby="v-pills-change_password-tab"></div>
                </div>
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