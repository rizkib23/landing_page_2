<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_kasir      = $_POST['id_kasir'];
$nama_ksr           = $_POST['nama_ksr'];
$alamat           = $_POST['alamat'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$no_hp           = $_POST['no_hp'];
$id_cabang = $_POST['id_cabang'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_kasir SET nama_ksr = '$nama_ksr', alamat ='$alamat', jenis_kelamin ='$jenis_kelamin', no_hp = '$no_hp', id_cabang = '$id_cabang' WHERE id_kasir = '$id_kasir'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_ksr.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>