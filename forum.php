<?php  
    session_start();  
      
    if(!$_SESSION['email'])  
    {  
      
        header("Location: login.php");
    } 

    $user = $_SESSION['user'];
      
?>  
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forum | Sistem Informasi FOLAFO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/forum.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="user.php">SIFOFO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="user.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_about.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Divisi
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="user_divisi_inggris.php">Divisi Inggris</a>
                <a class="dropdown-item" href="user_divisi_prancis.php">Divisi Prancis</a>
                <a class="dropdown-item" href="user_divisi_jepang.php">Divisi Jepang</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forum.php">Forum</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $user;?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>   
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="hero">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-6 offset-lg-3">
            <div class="cardbox shadow-lg bg-white">
              <div class="cardbox-heading">
                <div class="media m-0">
                  <div class="d-flex mr-3">
                    <a href=""><img class="img-fluid rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/4.jpg" alt="User"></a>
                  </div>
                  <div class="media-body">
                    <p class="m-0">Benjamin Robinson</p>
                    <small><span><i class="icon ion-md-pin"></i> Nairobi, Kenya</span></small>
                    <small><span><i class="icon ion-md-time"></i> 10 hours ago</span></small>
                  </div>
                </div><!--/ media -->
              </div><!--/ cardbox-heading -->
              <div class="cardbox-item">
                <img class="img-fluid" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/1.jpg" alt="Image">
              </div><!--/ cardbox-item -->
              
              <div class="cardbox-comments">
                <span class="comment-avatar float-left">
                <a href=""><img class="rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg" alt="..."></a>                            
              </span>
              <div class="search">
                <input placeholder="Write a comment" type="text">
                <button><i class="fa fa-camera"></i></button>
              </div><!--/. Search -->
            </div><!--/ cardbox-like -->      
          </div><!--/ cardbox -->
        </div><!--/ col-lg-6 --> 
        <div class="col-lg-3">
          <div class="shadow-lg p-4 mb-2 bg-white author">
            <a href="http://www.themashabrand.com/">Created by The Masha Brand</a>
            <p>Bootstrap 4.1.0</p>
          </div>
       </div><!--/ col-lg-3 -->
     </div><!--/ row -->
    </div><!--/ container -->
  </section>


      

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>