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
$qry = mysqli_query($koneksi, "select max(id_tranksaksi_pembelian) as id from tranksaksi_pembelian");
$hasil = mysqli_fetch_array($qry);
$idtr = $hasil['id'];

$urutan = (int) substr($idtr, 1, 3);
$urutan++;

$huruf = 'TRB';
$idtr = $huruf . sprintf("%03s", $urutan);





?>




<form action="../form_tambah_produk/aksi_tranksaksi_pembelian.php" method="POST">
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">TRANKSAKSI PEMBELIAN STOK</h2>
                </div>
                <div class="card-body">
                    <form action="aksi_detail_pembelian.php" method="POST">
                        <div class="form-row">
                            <div class="name" >ID_TRANKSAKSI</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_tr" value="<?=$idtr;?>" readonly placeholder="id">
                            </div>
                        </div>
                        

                   
                        <div class="form-row">
                            <div class="name">ID BELI</div>
                            <div class="value">
                                <div class="input-group">

                                    <select class="input--style-6"  placeholder="id_beli" name="id_beli">
                                    <?php
                                        $qry = "SELECT * from pembelian_stok";
                                        $f = $koneksi->query($qry);
                                        while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['id_beli']; ?>"><?php echo $g['id_beli'];  ?></option>
                                        <?php }?> </select>
                                </div>
                            </div>
                        </div>



                  




                        <div class="form-row">
                            <div class="name">METODE PEMBAYARAN</div>
                            <div class="value">
                            <select class="input--style-6"  placeholder="id_beli" name="id_beli">
                                    <option>CASH</option>
                                    <option>KREDIT</option>

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