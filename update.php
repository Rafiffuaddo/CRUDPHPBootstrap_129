<?php

include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "update mahasiswa set NAMA='$nama', NIM='$nim', ALAMAT='$alamat' where ID='$id'");

header("location:index.php");