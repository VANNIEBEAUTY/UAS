<?php

$id=$_POST['produk_id'];
$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("INSERT INTO produk(produk_id,nama_produk,harga,jumlah,total_harga) 
                        VALUES('$produk_id', '$nama_produk', '$harga', '$jumlah', '$total_harga')");

if($simpan==true){

    header("location:tampil-produk.php?pesan=inputBerhasil");
} 
else{
    echo "Error";
}




?>