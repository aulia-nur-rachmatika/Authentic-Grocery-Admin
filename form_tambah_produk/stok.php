<?php
include '../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
     
</head>

<body>
    

    <div class="mx-auto">


        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                STOK BARANG
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID STOK</th>
                    
                            <th scope="col">NAMA PRODUK</th>
                            <th scope="col">STOK TERSEDIA</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
include '../koneksi.php';


$sql = "SELECT nama_produk,stok,id_stok from produk,stok_barang where produk.id_produk=stok_barang.id_produk";
$a = $koneksi->query($sql);
while ($b = mysqli_fetch_array($a)) {

    ?>
                            <tr>

            <td><?php echo $b['id_stok']; ?></td>
            <td><?php echo $b['nama_produk']; ?></td>
            <td><?php echo $b['stok']; ?></td>
<?php
$id=$b['id_stok'];
?>

            <td scope="row"> <a href="../form_tambah_produk/editStok.php?id_stok=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a> 

            <a href="../form_tambah_produk/hapusStok.php?id_stok=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a> 
            
                                </td>
                            </tr>
                        <?php

}

?>
                    </tbody>
                    
                    <a href="../form_tambah_produk/tambah_produk.php?id=<?php echo $id ?>"><button type="button" class="btn btn-warning">TAMBAH DATA</button></a> 
                </table>
            </div>
        </div>
    </div>
</body>

</html>