<?php
include ('koneksi.php');
$id=$_POST['id_admin'];
$nm=$_POST['nama'];
$email=$_POST['email'];
$pw=$_POST['password'];
$ulang_pw=$_POST['ulang_password'];


mysqli_query($koneksi,"INSERT INTO admin(id_admin,nama,password,email,ulang_password) VALUES ('".$id."', '".$nm."', '".$email."', '".$pw."', '".$ulang_pw."')");

header('location:index.html');

?>