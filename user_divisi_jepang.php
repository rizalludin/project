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

    <title>Divisi Jepang | Sistem Informasi FOLAFO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

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
                <a class="dropdown-item" href="gantipassword.php">Ganti Password</a>
                <a class="dropdown-item" href="logout.php">Logout</a>   
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <br>
        <h3>JAPANESE DIVISION</h3>
        <p align="justify">日本語は、この時代の誰にでも属している国際的な言語です。
          人生のあらゆる側面は誰もが日本語を習得する必要があります
          いろいろな理由で困難な人がまだたくさんいます。これ
          技術開発、情報通信、そして今日、
          誰もが知恵と知識を得ることができるように日本語教育ウェブサイト
          あなたは州の機関に入らなくても、簡単かつ安価に英語を教えることができます。
          これは正式でも非公式でもないため、ウェブユーザーにとっては独立しています
          家庭教師と教師と一緒に。それ以外に、英語教育ウェブの存在は、誰もが日本語を学ぶことができます
          いつでもどこでも。この日本語教育ウェブサイトでは、
          中学校には文法、緊張感、語彙が含まれています。テキスト、イメージ、映画、記事、
          トレーニング。うまくいけば、この日本語教育ウェブは、
        インドネシアが良いかもしれない。</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10">
        <form action="" method="get">
          <div class="input-group col-md-5 col-md-offset-7">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
            <select type="submit" name="Angkatan" class="form-control" onchange="this.form.submit()">
              <option>Pilih angkatan ..</option>
              <?php 
              include 'include/config.php';
              ?>
              <?php
              $pil=mysqli_query($conn,"select distinct Angkatan from tbluser where Divisi = 'Divisi Jepang' order by Angkatan desc");
              while($p=mysqli_fetch_array($pil)){
                ?>
                <option><?php echo $p['Angkatan'] ?></option>
                <?php
              }
              ?>  

            </select>
          </div>
          <br>
          <?php 
          if(isset($_GET['Angkatan'])){
            $angkatan = mysqli_real_escape_string($conn,$_GET['Angkatan']);
            ?><?php
          }else{
            $ag="angkatan_post_ig.php";
          }
          ?>
          <?php 
          if(isset($_GET['Angkatan'])){
            echo "<h4> Data Anggota Sesuai Angkatan  <a style='color:blue'> ". $_GET['Angkatan']."</a></h4>";
          }
          ?>
          <table class="table">
            <tr>
              <th>No</th>
              <th>Angkatan</th>
              <th>Nama Anggota</th>
              <th>NIM</th>
              <th>Divisi</th>
              <th>Jurusan</th>            
            </tr>
            <?php 
            if(isset($_GET['Angkatan'])){
              $angkatan=mysqli_real_escape_string($conn,$_GET['Angkatan']);
              $ssg=mysqli_query($conn,"select * from tbluser where Angkatan like '$angkatan' order by Angkatan desc");
            }else{
              $ssg=mysqli_query($conn,"select * from tbluser where Divisi = 'Divisi Jepang' order by Angkatan desc");
            }
            $no=1;
            while($b=mysqli_fetch_array($ssg)){

              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $b['Angkatan'] ?></td>
                <td><?php echo $b['Username'] ?></td>
                <td><?php echo $b['NIM'] ?></td>
                <td><?php echo $b['Divisi'] ?></td>
                <td><?php echo $b['Jurusan'] ?></td>            
              </tr>

              <?php 
            }
            ?>
            <?php 
            ?>
          </tr>
        </table>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>