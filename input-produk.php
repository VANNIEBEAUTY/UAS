<?php include "header.php"; ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-produk.php" method="POST">
                <div class="form-group">
                        <label for="produk_id">produk_id</label>
                        <input type="number" name="produk_id"value="<?php echo $row['produk_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">nama_produk</label>
                        <input type="text" name="nama_produk"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="number" name="harga"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="number" name="jumlah"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="number" name="total_harga"  class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Simpan" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>