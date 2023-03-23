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
    <title>Form Laporan Penjualan </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php
include 'koneksi.php';
$qry = mysqli_query($koneksi, "select max(id_laporan) as id from laporan_penjualan");
$hasil = mysqli_fetch_array($qry);
$idlp = $hasil['id'];

$urutan = (int) substr($idlp, 1, 3);
$urutan++;

$huruf = 'IDP';
$idlp = $huruf . sprintf("%03s", $urutan);






?>

<script language="JavaScript">
function totalBayar(){
    var hargaa= $('input[name="harga"]').val();
    var jumlahh=$('input[name="jumlah"]').val();
    var result=parseFloat(hargaa) * parseFloat(jumlahh);
    if(!isNan(result))
    {
        $('input[name="total"]').val(result);
    }else
    $('input[name="total"]').val(0);
}

</script>




<form action="../form_tambah_produk/aksi_laporan_penjualan.php" method="POST">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">LAPORAN PENJUALAN PRODUK</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="name" >ID_LAPORAN</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_laporan" value="<?=$idlp;?>" readonly placeholder="id">
                            </div>
                        </div>
                        

                   
                        <div class="form-row">
                            <div class="name">ID TRANKSAKSI</div>
                            <div class="value">
                                <div class="input-group">

                                    <select class="input--style-6"  name="id_tranksaksi" placeholder="id tranksaksi">
                                    <?php
                                        $qry = "SELECT * from detail_penjualan";
                                        $f = $koneksi->query($qry);
                                        while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['id_tranksaksi']; ?>"><?php echo $g['id_tranksaksi'];  ?></option>
                                        <?php }?> </select>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="name">ID PENJUALAN</div>
                            <div class="value">
                                <div class="input-group">

                                    <select class="input--style-6"  name="id_pembeli" placeholder="id_pembeli">
                                    <?php
                                        $qry = "SELECT * from data_penjualan";
                                        $f = $koneksi->query($qry);
                                        while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['id_pembeli']; ?>"><?php echo $g['id_pembeli']; ?></option>
                                        <?php }?> </select>
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