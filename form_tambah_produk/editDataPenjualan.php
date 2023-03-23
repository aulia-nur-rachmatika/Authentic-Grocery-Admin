<?php
include '../koneksi.php';
$dataedit = mysqli_query($koneksi,  "SELECT total,id_pembeli,tanggal_tranksaksi from laporan_penjualan,data_penjualan where id_pembeli='" . $_GET['id_pembeli'] . "'");
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
                            <div class="name" >ID PEMBELI</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_pembeli" value="<?php echo $result['id_pembeli'] ?>" readonly placeholder="id">
                            </div>
                    </div>
                   

                        <div class="form-row">
                            <div class="name">TOTAL BAYAR</div>
                            <div class="value">
                            <div class="input-group">

<select class="input--style-6"  name="total" placeholder="total">
<?php
    $qry = "SELECT * from laporan_penjualan";
    $f = $koneksi->query($qry);
    while ($g = $f->fetch_array()) { ?><option value="<?php echo $g['id_laporan']; ?>"><?php echo $g['total']; ?> <?php echo $g['id_laporan'] ?></option>
    <?php }?> </select>
</div>
                            </div>
                        </div>
                       
                       
                        <div class="form-row">
                            <div class="name">TANGGALTRANKSAKSI</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="tanggal" value="<?php echo $result['tanggal_tranksaksi'] ?>">
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
        $update = mysqli_query($koneksi, "UPDATE data_penjualan SET 
    tanggal_tranksaksi='" . $_POST['tanggal'] . "' where id_pembeli='" . $_GET['id_pembeli'] . "'");
        if ($update) {
            echo "edit berhasil";
            header('location:../startbootstrap-sb-admin-2-gh-pages/penjualan.php');
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