<?php

include("../koneksi.php");

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];

    $sql = "INSERT INTO kategori (id, nama) VALUE ('','$nama')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>