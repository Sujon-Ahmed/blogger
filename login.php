<?php
    session_start();
    if(isset($_SESSION['id'])) {
        header('location:myblog.php');
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
        <a class="navbar-brand text-secondary" href="index.php" title="Blogger Home"><span class="fas fa-blog"></span><strong> Blogger</strong></a>
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
                <div class="card login_form shadow-sm">
                    <form action="auth.php" method="POST">
                        <h5 class="card-header text-center mb-3">Login Here</h5>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                            <div class="form-text">We'll never share your password with anyone else.</div>
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            or <a href="register.php">Register a Account</a>
                        </div>
                        <div class="mb-3 ml-2 mr-2">
                            <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Submit" class="mr-2 ml-auto">
                            <input type="reset" class="btn btn-danger btn-sm" value="Reset">
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