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
    <title>Form Pembelian Stok</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php
include 'koneksi.php';
$qry = mysqli_query($koneksi, "select max(id_beli) as id from pembelian_stok");
$hasil = mysqli_fetch_array($qry);
$idbeli = $hasil['id'];

$urutan = (int) substr($idbeli, 1, 3);
$urutan++;

$huruf = 'B';
$idbeli = $huruf . sprintf("%03s", $urutan);

$qry2 = mysqli_query($koneksi, "select max(id_tranksaksi_pembelian) as id from tranksaksi_pembelian");
$hasil2 = mysqli_fetch_array($qry2);
$idtr = $hasil['id'];

$urutan2 = (int) substr($idtr, 1, 3);
$urutan2++;

$huruf = 'TRB';
$idtr = $huruf . sprintf("%03s", $urutan2);

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




<form action="../form_tambah_produk/aksi_pembelian_stok.php" method="POST">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Pembelian Stok</h2>
                </div>
                <div class="card-body">
                    <form action="aksi_tambah_produk.php" method="POST">
                        <div class="form-row">
                            <div class="name" >ID_BELI</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_beli" value="<?=$idbeli;?>" readonly placeholder="id">
                            </div>
                        </div>




                <div class="card-body">

                        <div class="form-row">
                            <div class="name" >ID_TRANKSAKSI</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_tr" value="<?=$idtr;?>" readonly placeholder="id">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">NAMA PRODUK</div>
                            <div class="value">
                                <div class="input-group">

                                    <select class="input--style-6"  name="nama" placeholder="nama produk">
                                    <?php
$qry = "SELECT * from produk";
$f = $koneksi->query($qry);
while ($g = $f->fetch_array()) {?><option value="<?php echo $g['nama_produk']; ?>"><?php echo $g['nama_produk']; ?> <?php echo $g['id_produk'] ?></option>
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
while ($g = $f->fetch_array()) {?><option value="<?php echo $g['id_produk']; ?>"><?php echo $g['id_produk']; ?></option>
                                        <?php }?> </select>
                                </div>
                            </div>
                        </div>






                        <div class="form-row">
                            <div class="name">JUMLAH BARANG</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="jumlah" onkeyup="totalBayar()" placeholder="jumlah">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">HARGA</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="harga"
                                    onkeyup="totalBayar()" placeholder="harga">
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
                            <div class="name">METODE PEMBAYARAN</div>
                            <div class="value">
                                <div class="input-group">
                                <select class="input--style-6"  name="metode" placeholder="metode">
                                   <option>CASH </option>
                                   <option>KREDIT</option>
                                   <option>E-WALLET</option>
                                   <option>PAYPAL</option>
                                      </select>
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