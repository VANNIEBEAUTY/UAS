
<?php

$produk_id=$_POST['produk_id'];
$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into produk(produk_id,nama_produk,harga,jumlah,total_harga) 
                        values ('$produk_id', '$nama_produk', '$harga', '$jumlah', '$total_harga')");

if($simpan==true){

    header("location:tampil-pesan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>