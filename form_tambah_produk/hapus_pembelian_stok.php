<?php
include '../koneksi.php';

if(isset($_GET['id_beli'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM pembelian_stok where id_beli='".$_GET['id_beli']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/pembelianStok.php');
}
?>