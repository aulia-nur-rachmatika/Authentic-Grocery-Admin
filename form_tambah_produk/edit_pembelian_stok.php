<?php
include '../koneksi.php';
$dataedit = mysqli_query($koneksi, "SELECT nama_produk,id_beli,jumlah_barang,harga_barang,total from produk,pembelian_stok   where id_beli='" . $_GET['id_beli'] . "'");
$result = mysqli_fetch_array($dataedit);


?>

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
    <title>Data Supplier</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

<div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">EDIT DATA</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="name" >ID BELI</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_beli" value="<?php echo $result['id_beli'] ?>" readonly placeholder="id">
                            </div>
                    </div>
               
                    <div class="form-row">
                            <div class="name">NAMA PRODUK</div>
                            <div class="value">
                            <div class="input-group">

                                    <select class="input--style-6"  name="nama" placeholder="nama produk" readonly>
                                    <?php
                                        $qry = "SELECT * from produk";
                                        $f = $koneksi->query($qry);
                                        while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['nama_produk']; ?>"><?php echo $g['nama_produk']; ?> <?php echo $g['id_produk'] ?></option>
                                        <?php }?> </select>
                                    </div>

                                        </div>
                                        </div>

                                        <div class="card-body">
                    
                        <div class="form-row">
                            <div class="name" >HARGA BARANG</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="harga_barang" value="<?php echo $result['harga_barang'] ?>" placeholder="id">
                            </div>
                                            </div>
                                        </div>

                        <div class="card-body">
                    
                        <div class="form-row">
                            <div class="name" >JUMLAH BARANG</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="jumlah_barang" value="<?php echo $result['jumlah_barang'] ?>" placeholder="id">
                            </div>
                    </div>
                    </div>
                    <div class="form-row">
                            <div class="name" >TOTAL PEMBAYARAN</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="total" value="<?php echo $result['total'] ?>" placeholder="id">
                            </div>
                    </div>
                    </div>


                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="edit">EDIT DATA</button>
                </div>

            </div>
        </div>
    </div>
    <?php
include '../koneksi.php';
if (isset($_POST['edit'])) {
    $update = mysqli_query($koneksi, "UPDATE pembelian_stok SET 
jumlah_barang='" . $_POST['jumlah_barang'] . "',harga_barang='" . $_POST['harga_barang'] ."',total='" . $_POST['total'] ."' where id_beli='" . $_GET['id_beli'] . "'");


$update=mysqli_query($koneksi, "UPDATE tranksaksi_pembelian SET 
total='" . $_POST['total'] . "'where id_beli='" . $_GET['id_beli'] . "'");
    if ($update) {
   
echo "<script>window.location.href='../startbootstrap-sb-admin-2-gh-pages/pembelianStok.php';</script>'";
    } else {
        echo "gagal";
    }

}
?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->




</html>
<!-- end document-->