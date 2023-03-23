<?php
include '../koneksi.php';

if(isset($_GET['id_admin'])){
    $hapus = mysqli_query($koneksi, "DELETE FROM admin where id_admin='".$_GET['id_admin']."' ");
    header('location:../startbootstrap-sb-admin-2-gh-pages/admin.php');
}
?>