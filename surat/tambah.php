<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Tambah data surat</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Catatan Arsip</h1>
			<a href="../index.php">Home</a>
		</div>
	</div>
	<div class="container">
		<h4>Tambah data surat</h4>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="no_surat">Nomor Surat</label>
				<input type="text" name="no_surat" class="form-control" id="no_surat" placeholder="Masukkan no surat"
					required>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nama_pengirim">Nama Pengirim</label>
					<input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim"
						placeholder="Masukkan nama pengirim surat" required>
				</div>
				<div class="form-group col-md-6">
					<label for="nama_penerima">Nama Penerima</label>
					<input type="text" name="nama_penerima" class="form-control" id="nama_penerima"
						placeholder="Masukkan nama penerima surat" required>
				</div>
			</div>
			<div class="form-group">
				<label for="kategori">Kategori :</label>
				<select class="form-control" name="kategori" id="kategori" required>
					<option value="">--Pilih Kategori--</option>
					<?php 
					include("../koneksi.php");
					$kategori = mysqli_query($db, 'SELECT * FROM kategori ORDER BY nama ASC');
					if (mysqli_num_rows($kategori) > 0) {
						while ($row = mysqli_fetch_array($kategori)) {
							echo "<option>". $row['nama']."</option>";
						}
					} 
					
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="customFile">Pilih file</label>
				<input type="file" class="form-control-file" name="gambar" id="gambar">
			</div>
			<button type="submit" class="btn btn-primary mt-2" name="submit">Tambah Data</button>
			<a href="index.php" class="btn btn-warning mb-2">Kembali</a>
		</form>
	</div>



	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>

</body>

</html>