<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_kategori      = $_POST['id_kategori'];
$nama_ktgr           = $_POST['nama_ktgr'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_kategori SET nama_ktgr = '$nama_ktgr' WHERE id_kategori = '$id_kategori'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_ktgr.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>