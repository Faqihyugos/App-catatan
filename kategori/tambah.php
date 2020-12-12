<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tambah Kategori</title>
 </head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Catatan Arsip</h1>
        </div>     
    </div>
    <div class="container">
        <h2 class="text-center">Form Tambah Kategori</h2><br>
        <form action="simpan.php" method="post">
            <div class="form-group">
                <label>Nama Kategori :</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-success"/>
        </form>
        <a href="tambah.php" type="button" class="btn btn-warning" style="margin-top:10px; margin-bottom:10px;"> Ulangi</a>
        <a href="index.php" type="button" class="btn btn-primary"> Kembali</a>
    </div>

</body>
</html>