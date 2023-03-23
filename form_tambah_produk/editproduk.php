<?php
include '../koneksi.php';
$dataedit=mysqli_query($koneksi,"SELECT * from produk where id_produk='".$_GET['id_produk']."'");
$result=mysqli_fetch_array($dataedit);
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
    <title>Apply for job by Colorlib</title>

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
                    <h2 class="title">EDIT PRODUK</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="name" >ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="id_produk" value="<?php echo $result['id_produk']?>" readonly placeholder="id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NAMA PRODUK</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama" value="<?php echo $result['nama_produk']?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">MERK</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="merk" value="<?php echo $result['merk']?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">HARGA</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="harga" value="<?php echo $result['harga']?>">
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
    if(isset($_POST['edit'])){
$update=mysqli_query($koneksi, "UPDATE produk SET nama_produk='".$_POST['nama']."',
merk='".$_POST['merk']."',harga='".$_POST['harga']."' where id_produk='".$_GET['id_produk']."'");
if($update){
    echo "edit berhasil";
    header ('location:../startbootstrap-sb-admin-2-gh-pages/daftar_produk.php');
}else
echo "gafga";

    }
    ?>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->




</html>
<!-- end document-->