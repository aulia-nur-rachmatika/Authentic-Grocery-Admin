<?php
include '../koneksi.php';

if(isset($_GET['id_supplier'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM supplier where id_supplier='".$_GET['id_supplier']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/supplier.php');
}
?>