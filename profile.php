<?php
include "include/config.php"
?>
<?php  
session_start();  

if(!$_SESSION['email'])  
{  

  header("Location: login.php");
} 

$user = $_SESSION['user'];
$id = $_SESSION['id'];

?>  
<!DOCTYPE html>
<html>
<head>
  <style>
  body {
    font-family: Arial;
  }

  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  /*div.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;*/
  }
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet">
<link href="css/blog-home.css" rel="stylesheet">
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">SIFOFO</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Divisi
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="Divisi_inggris.php">Divisi Inggris</a>
              <a class="dropdown-item" href="Divisi_prancis.php">Divisi Prancis</a>
              <a class="dropdown-item" href="Divisi_jepang.php">Divisi Jepang</a>
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
              <a class="dropdown-item" href="gantipassword.php">Ganti Password</a>
              <a class="dropdown-item" href="logout.php">Logout</a>   
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<<?php
    include('include/config.php');
    $sql = "select * from tbluser where id_user = $_GET[id_user]";
    $hasil = mysqli_query($conn, $sql);
    $baris = mysqli_fetch_array($hasil);

  ?>

<form action="" method="post">
  <div class="row">
    <div class="col-sm-8">
      <br>
      <h3>Profile User</h3>
      <p>Periksa kembali Data Diri Anda</p>
      <label >Nama Lengkap atau Username</label>
      <input type="hidden" name="id_user" value="<?php echo $baris[0];?>">
      <input value="<?php echo $baris[1];?>" type="text" name="username" placeholder="Your Username..">

      <label >Email</label>
      <input value="<?php echo $baris[2];?> " type="text"  name="email" placeholder="Your email..">

      <label >Divisi</label>
      <select  name="divisi">

        <option value="<?php echo $baris[7];?>">Inggris</option>
        <option value="<?php echo $baris[7];?>">Jepang</option>
        <option value="<?php echo $baris[7];?>">Perancis</option>
      </select>
      <input type="submit" value="Submit" name="simpan">
    </form>

    <?php
    include('include/config.php');
    if (isset($_POST['simpan'])) {
      $id_user = $_POST["id_user"];
      $uname = $_POST["Username"];
      $email = $_POST["Email"];
      $nim = $_POST["NIM"];
      $gender = $_POST["Gender"];
      $divisi = $_POST["Divisi"];
      $jurusan = $_POST["Jurusan"];
      $angkatan = $_POST["Angkatan"];

      $sql = "UPDATE tbluser SET Username = '$uname', Email = '$email', Divisi = '$divisi' WHERE id_user = '$id_user'";
      $hasil = mysqli_query($conn, $sql);
    if ($hasil) {
      header('location:profile.php');
    }else{
      echo "error ".$sql;
    }
    }
    ?>