<?php
include '../koneksi.php';

if(isset($_GET['id_tranksaksi'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM detail_penjualan where id_tranksaksi='".$_GET['id_tranksaksi']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/penjualan.php');
}
?>