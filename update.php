<?php 
include 'include/config.php';
$id_user=$_POST['id_user'];
$username=$_POST['username'];
$email=$_POST['email'];
$divisi=$_POST['divisi'];

mysqli_query($conn,"update tbluser set Username='$username', Email = '$email' Divisi='$divisi' where id='$id_user'");
header("location:user.php");
?>