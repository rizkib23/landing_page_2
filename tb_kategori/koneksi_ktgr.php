<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama_ktgr           = $_POST['nama_ktgr'];

//query insert data ke dalam database
$query = "INSERT INTO tb_kategori (nama_ktgr) VALUES ('$nama_ktgr')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_ktgr.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>