<?php
include '../koneksi.php';

$idl=$_POST['id_tranksaksi'];
$ids=$_POST['tgl'];


$sql="INSERT INTO data_penjualan (id_pembeli,tanggal_tranksaksi) values ('".$idl."','".$ids."')";
$a=$koneksi->query($sql);

if($a==true){
    header('location:../form_tambah_produk/hasil_penjualan.php');
}else{
    echo "error";
}








?>