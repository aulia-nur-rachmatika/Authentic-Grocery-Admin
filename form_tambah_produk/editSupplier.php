<?php
include '../koneksi.php';
$dataedit = mysqli_query($koneksi, "SELECT * from supplier where id_supplier='" . $_GET['id_supplier'] . "'");
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
                            <div class="name" >ID SUPPLIER</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_supplier" value="<?php echo $result['id_supplier'] ?>" readonly placeholder="id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NAMA</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama" value="<?php echo $result['nama'] ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">ALAMAT</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="alamat" value="<?php echo $result['alamat'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NO TELP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="no_telp" value="<?php echo $result['no_telp'] ?>">
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
    $update = mysqli_query($koneksi, "UPDATE supplier SET nama='" . $_POST['nama'] . "',
alamat='" . $_POST['alamat'] . "',no_telp='" . $_POST['no_telp'] . "' where id_supplier='" . $_GET['id_supplier'] . "'");
    if ($update) {
        echo "edit berhasil";
        header('location:../startbootstrap-sb-admin-2-gh-pages/supplier.php');
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