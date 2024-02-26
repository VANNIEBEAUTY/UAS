
<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-user.php" method="POST">
                    <div class="form-group">
                        <label for="produk_id">Produk ID</label>
                        <input type="text" name="produk_id" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Nama produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="Harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">Total harga</label>
                        <input type="number" name="total_harga" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>


<?php include "footer.php";?>