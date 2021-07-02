
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
        <a class="navbar-brand text-secondary" href="index.php" title="Blogger Home"><span class="fas fa-home"></span><strong> Blogger</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <a href="login.php"><img src="asset/img/avatar2.png" title="My Account" class="avatar2" alt="avatar"></a>
        </div>
    </nav>

    <div class="container">
        <div class="row ">
            <div class="col-md-6 m-auto">
            <?php
                if(isset($_GET['valid']) && $_GET['valid'] == 'error') {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            All Field Are Required!
                        </div>
                    <?php
                }
            ?>
            <?php
                if(isset($_GET['update']) && $_GET['update'] == 'success') {
                    ?>
                        <div class="alert alert-success" role="alert">
                            Successfully Data Updated!
                        </div>
                    <?php
                }
            ?>
                <div class="card login_form shadow-sm">
                    <form action="insert.php" method="POST">
                        <h5 class="card-header text-center mb-3">Register Here</h5>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="user_name" class="form-label">User Name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="Enter user name" value="<?php echo  $user_name;?>">
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="user_profession" class="form-label">User Profession</label>
                            <input type="text" class="form-control" name="user_profession" placeholder="Enter user profession">
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="user_location" class="form-label">User Location</label>
                            <input type="text" class="form-control" name="user_location" placeholder="Enter user location">
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="user_email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="user_email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="user_phone" class="form-label">User Phone</label>
                            <input type="text" class="form-control" name="user_phone" placeholder="Enter your phone">
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="date_of_bath" class="form-label">Date of bath</label>
                            <input type="date" class="form-control" name="date_of_bath" placeholder="Enter your bath date">
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="user_pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name="user_pass" placeholder="Enter your password">
                            <div class="form-text">We'll never share your password with anyone else.</div>
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                        <label for="user_about" class="form-label">About Yourself</label><br>
                            <textarea name="user_about" rows="5" style="width: 100%;padding:10px 0 0 10px;" placeholder="Say something about yourself..."></textarea>
                        </div>

                        <div class="mb-3 ml-2 mr-2">
                        <input type="submit" name="submit" value="Submit" class="mr-2">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="reset" value="Reset">
                        </div>
                    </form>
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