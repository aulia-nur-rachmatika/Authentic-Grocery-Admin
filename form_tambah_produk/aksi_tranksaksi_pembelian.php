<?php
include '../koneksi.php';

$idtr=$_POST['id_tr'];
$idbl=$_POST['id_beli'];
$mtd=$_POST['metode'];

$sql="INSERT INTO tranksaksi_pembelian (id_tranksaksi_pembelian,id_beli,metode_pembayaran) values ('".$idtr."','".$idbl."','".$mtd."')";
$a=$koneksi->query($sql);

if($a==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/daftar_produk.php');
}else{
    echo "error";
}








?>