<?php

include("../koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM kategori WHERE id=$id";
$query = mysqli_query($db, $sql);
$kategori = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Edit Kategori</title>
 </head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Catatan Arsip</h1>
        </div>     
    </div>
    <div class="container">
        <h2 class="text-center">Form Kategori</h2><br>
        <form action="simpan-edit.php" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $kategori['id'];?>">
            <div class="form-group">
                <label>Nama Kategori :</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $kategori['nama'];?>" >
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-success"/>
            <a href="index.php" type="button" class="btn btn-primary">Kembali</a>
        </form>
        
    </div>

</body>
</html>