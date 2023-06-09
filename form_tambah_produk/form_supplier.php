

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
    <title>INPUT SUPPLIER</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php
include '../koneksi.php';
$qry = mysqli_query($koneksi, "select max(id_supplier) as id from supplier");
$hasil = mysqli_fetch_array($qry);
$idsupplier = $hasil['id'];

$urutan = (int) substr($idsupplier, 1, 3);
$urutan++;

$huruf = 'S';
$idsupplier = $huruf . sprintf("%03s", $urutan);

?>

    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">TAMBAH DATA</h2>
                </div>
                <div class="card-body">
                    <form action="../startbootstrap-sb-admin-2-gh-pages/aksi_tambah_supplier.php" method="POST">
                        <div class="form-row">
                            <div class="name" >ID SUPPLIER</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_supplier" value="<?=$idsupplier;?>" readonly placeholder="id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NAMA SUPPLIER</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama" placeholder="NAMA SUPPLIER">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">ALAMAT</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="alamat" placeholder="ALAMAT">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NO TELP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="telp" placeholder="NO">
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