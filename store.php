<?php
//include koneksi database
require_once './config.php';

//menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//menginput data ke database
$result = $koneksi->
    query("INSERT INTO mahasiswa VALUES(0,'$nama', '$nim', '$alamat')");
    if($result){
        header("location:./index.php");
    }else {
        echo $koneksi->error; 
    }
?>