<?php

include 'config.php';

$id = $_POST['ID'];
$nama = $_POST['NAMA'];
$nim = $_POST['NIM'];
$alamat = $_POST['ALAMAT'];

mysqli_query($koneksi, "update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");

header("location:index.php");