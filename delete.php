<?php
include 'config.php';

$id = $_GET['ID'];

mysqli_query($koneksi, "delete from mahasiswa where ID='$id'");

header("location:index.php");