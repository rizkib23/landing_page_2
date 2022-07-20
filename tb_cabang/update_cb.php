<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_cabang      = $_POST['id_cabang'];
$nama_cb           = $_POST['nama_cb'];
$alamat           = $_POST['alamat'];
$no_tlp    = $_POST['no_tlp'];
$email     = $_POST['email'];
$id_perusahaan    =$_POST['id_perusahaan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_cabang SET nama_cb = '$nama_cb', alamat = '$alamat', no_tlp = '$no_tlp', email = '$email',id_perusahaan = '$id_perusahaan' WHERE id_cabang = '$id_cabang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_cb.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>