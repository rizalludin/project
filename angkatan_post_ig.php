<?php 
 $no=1;
$angkatan=$_GET['Angkatan'];
$query=mysqli_query($koneksi,"select * from tbluser where Angkatan= " . $ang);
?>