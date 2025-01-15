<?php
include ("koneksi.php");
$id = $_GET["id"];
$query = mysqli_query($koneksi, "select * from produk where id=$id");

$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .card{
            justify-content:center;
            margin-top:100px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form action="proses_keranjang2.php" methode="post">
<input type="hidden" name="product_id" value="<?=$id?>">
<div class="card" style="width: 18rem;">
  <img src="foto_produk/<?=$data['foto']?>" class="card-img-top" alt="...">
  <div class="card-body">
  <h1><?= $data[ "nama"] ?></h1>
  <h4><?= $data[ "harga"] ?></h4>
  <h4><?= $data[ "deskripsi"] ?></h4>
    <span><a href="#" class="btn btn-primary">keranjang</a>
    <a href="#" class="btn btn-primary">beli sekarang</a></span>
  </div>
</div>
</form>
</body>
</html>