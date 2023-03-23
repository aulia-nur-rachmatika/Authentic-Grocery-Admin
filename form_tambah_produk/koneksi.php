<?php
$host = "localhost";
$username="root";
$password="1234";
$database="authentic_grocery";
$koneksi=mysqli_connect($host,$username,$password,$database);

if ($koneksi){
    echo"";
}else {
    echo "Tidak berhasil masuk ke database";
}
?>