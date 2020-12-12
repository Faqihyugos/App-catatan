<?php 
require 'functions.php';
$surat = query("SELECT * FROM surat");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Data Surat</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Catatan Arsip</h1>
				<a href="../index.php">Home</a>
			</div>
		</div>
		<div class="container">
			<h1>Data Surat</h1>
			<br>

			<a class="btn btn-primary mb-2" href="tambah.php">Tambah Data Surat</a>
		
			<table class="table" id="table">
				<thead class="thead-dark">
					<tr>
						<th>No.</th>

						<th>No Surat</th>
						<th>Nama pengirim</th>
						<th>Nama Penerima</th>
						<th>Kategori</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php $i = 1; ?>
					<?php foreach( $surat as $row ) : ?>
					<tr>
						<td><?= $i; ?></td>


						<td><?= $row["no_surat"]; ?></td>
						<td><?= $row["nama_pengirim"]; ?></td>
						<td><?= $row["nama_penerima"]; ?></td>
						<td><?= $row["kategori"]; ?></td>
						<td><img src="../img/<?= $row["foto"]; ?>" width="50"></td>
						<td>
							<a class='btn btn-outline-secondary ' href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> 
							<a class='btn btn-outline-danger ' href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
						</td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>

		</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	</body>


</html>