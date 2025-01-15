<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>TAMBAH PRODUK </h1>
   <form action="prosestambah.php" method="post" enctype="multipart/form-data">  
    <div>
        Nama :
        <input type="text" name="nama" />
    </div>
    <div>
        Harga:
        <input type="number" name="harga" />
    </div>
    <div>
    Deskripsi :
        <input type="text" id= "" name="deskripsi" />
    </div>
    <div>
        Foto:
        <input type="file" name="foto" />
    </div>

    <input type="submit" name="simpan" value="simpan">
   </form>
</body>
</html>