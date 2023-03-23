<?php
include '../koneksi.php';

if(isset($_GET['id_tranksaksi_pembelian'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM tranksaksi_pembelian where id_tranksaksi_pembelian='".$_GET['id_tranksaksi_pembelian']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/tr_pembelian.php');
}
?>