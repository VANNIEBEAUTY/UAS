 <?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>VANNIE BEAUTY</h1>
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Penyimpanan Berhasil!
        </div>
<?php

}

?>


<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
        <div class="alert alert-success">
        Data Berhasil Dihapus!
        </div>
<?php

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
        <div class="alert alert-success">
        Perubahan Berhasil!
        </div>
        <?php

}

?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>produk_id</th><th>nama_produk</th><th>harga</th><th>jumlah</th><th>total_harga</th>
                <th>
                <a href="input-produk.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from produk order by produk_id ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['produk_id']?></td>
                <td><?php echo $row['nama_produk']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>
                <a href="edit-produk.php?id=<?php echo $row['produk_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-produk.php?id=<?php echo $row['produk_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>
            

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>