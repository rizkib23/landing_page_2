<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_member      = $_POST['id_member'];
$nama           = $_POST['nama'];
$no_hp           = $_POST['no_hp'];
$alamat           = $_POST['alamat'];
$jenis_kelamin     = $_POST['jenis_kelamin'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_member SET nama = '$nama', no_hp = '$no_hp', alamat ='$alamat', jenis_kelamin ='$jenis_kelamin' WHERE id_member = '$id_member'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_mem.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>