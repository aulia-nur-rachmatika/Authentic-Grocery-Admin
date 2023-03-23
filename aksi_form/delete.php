<?php
include '../koneksi.php';

if(isset($_GET['idkriteria'])){
    $delete=mysqli_query($koneksi, "DELETE from pr where id_produk='".$_GET['id_produk']."' ");
    
    header('location:hasilproduk.php');
}
?>