<?php
include '../koneksi.php';

$id=$_POST['id_beli'];

$idtr=$_POST['id_tr'];
$id_produk=$_POST['id_produk'];
$harga=$_POST['harga'];
$jmlh=$_POST['jumlah'];

$total=$_POST['total'];

$metode=$_POST['metode'];





//insert id_stok ke pembelian_stok

$sql2= "INSERT INTO pembelian_stok(id_beli,id_produk,jumlah_barang,harga_barang,total) values('".$id."','".$id_produk."','".$jmlh."','".$harga."','".$total."')";
$b=$koneksi->query($sql2);

if($b==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/stokBarang.php');
}else{
    echo "error";
}



$sql3= "INSERT INTO tranksaksi_pembelian(id_tranksaksi_pembelian,id_beli,total,metode) values('".$idtr."','".$id."','".$total."','".$metode."')";
$b=$koneksi->query($sql3);

if($b==true){
   header('location:../startbootstrap-sb-admin-2-gh-pages/stokBarang.php');
}else{
   echo "error";
}

//?>