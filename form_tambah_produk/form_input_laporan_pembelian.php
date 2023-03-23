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
    <title>Form Laporan Pembelian</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php
include 'koneksi.php';
$qry = mysqli_query($koneksi, "SELECT max(id_laporan) as id from laporan_pembelian");
$hasil = mysqli_fetch_array($qry);
$idlprn = $hasil['id'];

$urutan = (int) substr($idlprn, 2,4);
$urutan++;

$huruf = 'LP';
$idlprn = $huruf . sprintf("%03s", $urutan);



?>



<form action="../form_tambah_produk/aksi_laporan_pembelian.php" method="POST">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">LAPORAN PEMBELIAN STOK BARANG</h2>
                </div>
                <div class="card-body">
                 
                        <div class="form-row">
                            <div class="name" >ID LAPORAN</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_laporan" value="<?=$idlprn;?>" readonly placeholder="id">
                            </div>
                        </div>
                        
                      
                   
                        <div class="form-row">
                            <div class="name">ID SUPPLIER</div>
                            <div class="value">
                                <div class="input-group">

                                    <select class="input--style-6"  name="supplier" placeholder="ID SUPPLIER">
                                    <?php
                                        $qry = "SELECT * from supplier";
                                        $f = $koneksi->query($qry);
                                        while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['id_supplier']; ?>"><?php echo $g['id_supplier']; ?><?php echo $g['nama']?></option>
                                        <?php }?> </select>
                                </div>
                            </div>
                        </div>





                        <div class="form-row">
                            <div class="name">TANGGAL TRANKSAKSI</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="tanggal" placeholder="tanggal">
                                </div>
                            </div>
                        </div>



                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">TAMBAH</button>
                </div>

            </div>
        </div>
    </div>
    </form>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->




</html>
<!-- end document-->