<?php
include 'koneksi.php';

$id=$_POST['id_produk'];

$id_stok=$_POST['id_stok'];
$stok=$_POST['stok'];

$sql="INSERT INTO produk (id_produk,nama_produk,merk,harga) values ('".$id."','".$nm."','".$merk."','".$harga."')";
$a=$koneksi->query($sql);

if($a==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/daftar_produk.php');
}else{
    echo "error";
}



//insert stok
$sql2= "INSERT INTO stok_barang(id_stok,id_produk,stok) values('".$id_stok."','".$id."','".$stok."')";
$b=$koneksi->query($sql2);

if($b==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/daftar_produk.php');
}else{
    echo "error";
}


$sql2= "INSERT INTO detail_penjualan(id_produk) values('".$id."')";
$b=$koneksi->query($sql2);

if($b==true){
  
}else{
    echo "error";
}





?>