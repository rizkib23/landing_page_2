<?php

//include koneksi database
include('../konek.php');

//get data dari form    
$nama_ksr           = $_POST['nama_ksr'];
$alamat           = $_POST['alamat'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$no_hp           = $_POST['no_hp'];
$id_cabang = $_POST['id_cabang'];


//query insert data ke dalam database
$query = "INSERT INTO tb_kasir (nama_ksr, alamat, jenis_kelamin, no_hp, id_cabang) VALUES ('$nama_ksr', '$alamat', '$jenis_kelamin', '$no_hp', '$id_cabang' )";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_ksr.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>