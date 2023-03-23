<?php
include '../koneksi.php';

if(isset($_GET['id_pembeli'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM data_penjualan where id_pembeli='".$_GET['id_pembeli']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/penjualan.php');
}
?>