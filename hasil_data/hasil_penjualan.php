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
                DATA PENJUALAN
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID PEMBELI</th>
                            <th scope="col">TOTAL BAYAR</th>
                            <th scope="col">TANGGAL TRANKSAKSI</th>
                            <th scope="col">ACTION</th>
                        
                        </tr>
                        </thead>
                    <tbody>
                    <?php
include '../koneksi.php';


$sql = "SELECT total,id_pembeli,tanggal_tranksaksi from laporan_penjualan,data_penjualan where laporan_penjualan.id_laporan=data_penjualan.id_laporan";
$a = $koneksi->query($sql);
while ($b = mysqli_fetch_array($a)) {

    ?>
                            <tr>
                            <td><?php echo $b['id_pembeli']?></td>
                                <td><?php echo $b['total']?></td>
                                <td><?php echo $b['tanggal_tranksaksi']?></td>
                           
                   
                                <?php
$id=$b['id_pembeli'];
?>                    
                  
     
            <td scope="row"> <a href="../form_tambah_produk/editDataPenjualan.php?id_pembeli=<?=$id ?>"><button type="button" class="btn btn-warning">Edit</button></a> 
            
            <a href="../form_tambah_produk/hapusDataPenjualan.php?id_pembeli=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
}
?>
                    </tbody>
                    <a href="../form_tambah_produk/form_detail_penjualan.php?id=<?php echo $id ?>"><button type="button" class="btn btn-warning">TAMBAH DATA</button></a> 

                    

                </table>
            </div>
        </div>
    </div>

    <div class="mx-auto">



    <br>
    <br>
    <br>

    <!-- untuk mengeluarkan data detail-->
    <div class="card">
        <div class="card-header text-white bg-secondary">
            DETAIL TRANKSAKSI PENJUALAN
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID TRANKSAKSI</th>
             
                        <th scope="col">NAMA PRODUK</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">JUMLAH</th>                    
                      
                    </tr>
                </thead>
                <tbody>
                <?php
include '../koneksi.php';
                $sql = "SELECT nama_produk,harga,id_tranksaksi,jumlah from produk,detail_penjualan where produk.id_produk=detail_penjualan.id_produk";
$a = $koneksi->query($sql);
while ($b = mysqli_fetch_array($a)) {

?>
                        <tr>

        <td><?php echo $b['id_tranksaksi']; ?></td>
        <td><?php echo $b['nama_produk']; ?></td>
        <td><?php echo $b['harga']; ?></td>
        <td><?php echo $b['jumlah']; ?></td>
  

<?php
$idt=$b['id_tranksaksi'];
?>
  

        <td scope="row"> <a href="../form_tambah_produk/editdetailpenjualan.php?id_tranksaksi=<?php echo $idt ?>"><button type="button" class="btn btn-warning">Edit</button></a> 
        
        <a href="../form_tambah_produk/hapusDetailPenjualan.php?id_tranksaksi=<?php echo $idt ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php
}
?>
                </tbody>
                <a href="../form_tambah_produk/form_detail_penjualan.php?id=<?php echo $id ?>"><button type="button" class="btn btn-warning">TAMBAH DATA</button></a> 


            </table>
        </div>
    </div>
</div>


</body>

</html>