

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php
include 'koneksi.php';
$qry = mysqli_query($koneksi, "select max(id_produk) as id from produk");
$hasil = mysqli_fetch_array($qry);
$idproduk = $hasil['id'];

$urutan = (int) substr($idproduk, 1, 3);
$urutan++;

$huruf = 'P';
$idproduk = $huruf . sprintf("%03s", $urutan);


$qry2 = mysqli_query($koneksi, "select max(id_stok) as ids from stok_barang");
$hasil2 = mysqli_fetch_array($qry2);
$idstok = $hasil2['ids'];

$urutan2 = (int) substr($idstok, 2, 4);
$urutan2++;

$huruf2 = 'ST';
$idstok = $huruf2 . sprintf("%03s", $urutan2);


?>

    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">TAMBAH STOK</h2>
                </div>
                <div class="card-body">
                    <form action="aksi_tambah_stok.php" method="POST">
                        <div class="form-row">
                            <div class="name" >ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_produk" value="<?=$idproduk;?>" readonly placeholder="id">
                            </div>
                            <div class="card-body">
                   
                        <div class="form-row">
                            <div class="name" >ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_produk" value="<?=$idstok;?>" readonly placeholder="id">
                            </div>
                       

                      
                        <div class="form-row">
                            <div class="name">STOK</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="stok" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>


                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">TAMBAH</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->




</html>
<!-- end document-->