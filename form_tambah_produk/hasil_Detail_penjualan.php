<div class="mx-auto">
    
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
        
        <a href="delete.php?id_produk=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php
}
?>
                </tbody>
                <a href="../form_tambah_produk/tambah_produk.php?id=<?php echo $id ?>"><button type="button" class="btn btn-warning">TAMBAH PRODUK</button></a> 


            </table>
        </div>
    </div>
</div>