<?php
include '../koneksi.php';

$idl=$_POST['id_laporan'];
$idt=$_POST['id_tr'];

$ids=$_POST['supplier'];

$tgl=$_POST['tanggal'];


$sql="INSERT INTO laporan_pembelian (id_laporan,id_supplier,tanggal) values ('".$idl."','".$ids."','".$tgl."')";
$a=$koneksi->query($sql);

if($a==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/laporanPembelian.php');
}else{
    echo "error";
}








?>