<?php 
 
include 'connect.php';
$nama = $_POST['namaLengkap'];
$NISN = $_POST['NISN'];
 
mysql_query("UPDATE user SET namaLengkap='$nama', NISN='$NISN' WHERE id='$id'");
 
header("location:profil.php?pesan=update");
?>