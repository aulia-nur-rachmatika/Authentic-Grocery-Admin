

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
    <title>INPUT PEMBELI</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php
include 'koneksi.php';
$qry = mysqli_query($koneksi, "select max(id_tranksaksi) as id from detail_penjualan");
$hasil = mysqli_fetch_array($qry);
$idjual = $hasil['id'];

$urutan = (int) substr($idjual, 2,4);
$urutan++;

$huruf = 'TJ';
$idjual= $huruf . sprintf("%03s", $urutan);



?>

<?php
include 'koneksi.php';
$qry2 = mysqli_query($koneksi, "select max(id_laporan) as id from laporan_penjualan");
$hasil2 = mysqli_fetch_array($qry2);
$idlp = $hasil2['id'];

$urutan2 = (int) substr($idlp, 2,4);
$urutan2++;

$huruf2 = 'IL';
$idlp = $huruf2 . sprintf("%03s", $urutan2);


?>

<?php
include 'koneksi.php';
$qry3 = mysqli_query($koneksi, "select max(id_pembeli) as id from data_penjualan");
$hasil3 = mysqli_fetch_array($qry3);
$idp = $hasil3['id'];

$urutan3 = (int) substr($idp, 2,4);
$urutan3++;

$huruf3 = 'PB';
$idp = $huruf3 . sprintf("%03s", $urutan3);


?>





    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">TAMBAH DATA</h2>
                </div>
                <div class="card-body">
                    <form action="../form_tambah_produk/aksi_detail_penjualan.php" method="POST">
                        <div class="form-row">
                            <div class="name" >ID TRANKSAKSI</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_tranksaksi" value="<?=$idjual;?>" readonly placeholder="id">
                            </div>
                        </div>

                        <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="name" >ID_LAPORAN</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_laporan" value="<?=$idlp;?>" readonly placeholder="id">
                            </div>
                        </div>

                        <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="name" >ID_PEMBELI</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_pembeli" value="<?=$idp;?>" readonly placeholder="id">
                            </div>
                        </div>


<div class="form-row">
                            <div class="name">NAMA PRODUK</div>
                            <div class="value">
                                <div class="input-group">

                                    <select class="input--style-6"  name="nama" placeholder="nama">
                                    <?php
                                        $qry = "SELECT * from produk";
                                        $f = $koneksi->query($qry);
                                        while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['nama_produk']; ?>"><?php echo $g['nama_produk']; ?> <?php echo $g['id_produk'] ?></option>
                                        <?php }?> </select>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">ID PRODUK</div>
                            <div class="value">
                                <div class="input-group">

                                    <select class="input--style-6"  name="id_produk" placeholder="id_produk">
                                    <?php
                                        $qry = "SELECT * from produk";
                                        $f = $koneksi->query($qry);
                                        while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['id_produk']; ?>"><?php echo $g['id_produk']; ?></option>
                                        <?php }?> </select>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">HARGA</div>
                            <div class="value">
                            <div class="input-group">

<select class="input--style-6"  name="harga" placeholder="harga">
<?php
    $qry = "SELECT * from produk";
    $f = $koneksi->query($qry);
    while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['id_produk']; ?>"> <?php echo $g['harga']; ?> <?php echo $g['nama_produk'] ?></option>
    <?php }?> </select>
</div>
                        </div>
</div>
                    
    
                        <div class="form-row">
                            <div class="name">JUMLAH PRODUK</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="input" name="jumlah" placeholder="jumlah produk">
                                </div>
                            </div>
                        </div>
                        
                      

                        <div class="form-row">
                            <div class="name">TOTAL PEMBAYARAN</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="total" 
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">TANGGAL TRANKSAKSI</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="tgl" 
                                    >
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="name">INPUT OLEH:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="adm" 
                                    >
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