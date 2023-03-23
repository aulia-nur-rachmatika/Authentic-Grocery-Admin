<?php
include '../koneksi.php';

$idl=$_POST['id_laporan'];
$idt=$_POST['id_tranksaksi'];
$idp=$_POST['id_pembeli'];

$sql="INSERT INTO laporan_penjualan(id_laporan,id_tranksaksi, id_pembeli) values ('".$idl."','".$idt."','".$idp."')";
$a=$koneksi->query($sql);

if($a==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/daftar_produk.php');
}else{
    echo "error";
}








?>