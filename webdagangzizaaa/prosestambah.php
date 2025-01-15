<?php
include "koneksi.php";

echo"<h1>PRODUCT</h1>";

$nama = $_POST["nama"];
$harga = $_POST["harga"];
$deskripsi = $_POST["deskripsi"];
$foto = $_FILES["foto"]["nama"];
$lokasi_tmp =  $_FILES["foto"]["tmp_nama"];
$namabaru = time().$foto;

$query = mysqli_query($koneksi, "insert into produk values(null, '$nama', '$harga', '$deskripsi', '$foto')");

move_uploaded_file($lokasi_tmp, "foto_produk/$foto");
   
?>