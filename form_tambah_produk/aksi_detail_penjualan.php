<?php
include '../koneksi.php';

$id=$_POST['id_tranksaksi'];
$idl=$_POST['id_laporan'];
$idp=$_POST['id_produk'];
$idpb=$_POST['id_pembeli'];
$jmlh=$_POST['jumlah'];
$total=$_POST['total'];
$tgl=$_POST['tgl'];
$adm=$_POST['adm'];



$sql="INSERT INTO detail_penjualan (id_tranksaksi,id_produk,jumlah) values ('".$id."','".$idp."','".$jmlh."')";
$a=$koneksi->query($sql);

if($a==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/penjualan.php');
}else{
    echo "error";
}

$sql2="INSERT INTO laporan_penjualan (id_laporan,total,add_by) values ('".$idl."','".$total."','".$adm."')";
$b=$koneksi->query($sql2);

if($b==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/penjualan.php');
}else{
    echo "error";
}

$sql3="INSERT INTO data_penjualan (id_pembeli,id_laporan,tanggal_tranksaksi) values ('".$idpb."','".$idl."','".$tgl."')";
$c=$koneksi->query($sql3);

if($c==true){
    header('location:../startbootstrap-sb-admin-2-gh-pages/penjualan.php');
}else{
    echo "error";
}







?>