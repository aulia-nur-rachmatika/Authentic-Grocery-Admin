<?php
include '../koneksi.php';

if(isset($_GET['id_laporan'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM laporan_penjualan where id_laporan='".$_GET['id_laporan']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/laporanPenjualan.php');
}
?>