<?php

include 'config.php';

$id = $_POST['ID'];
$nama = $_POST['NAMA'];
$nim = $_POST['NIM'];
$alamat = $_POST['ALAMAT'];

mysqli_query($koneksi, "update mahasiswa set NAMA='$nama', NIM='$nim', ALAMAT='$alamat' where ID='$id'");

header("location:index.php");