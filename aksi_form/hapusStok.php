<?php
include '../koneksi.php';

if(isset($_GET['id_stok'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM stok_barang where id_stok='".$_GET['id_stok']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/stokBarang.php');
}
?>