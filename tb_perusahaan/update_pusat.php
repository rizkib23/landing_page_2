<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_perusahaan       = $_POST['id_perusahaan'];
$nama_pusat           = $_POST['nama_pusat'];
$alamat         = $_POST['alamat'];
$no_hp             = $_POST['no_hp'];
$email              = $_POST['email'];
$tanggal_berdiri    = $_POST['tanggal_berdiri'];
$npwp             = $_POST['npwp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_perusahaan  SET nama_pusat = '$nama_pusat', alamat = '$alamat', no_hp = '$no_hp', email = '$email', tanggal_berdiri = '$tanggal_berdiri', npwp ='$npwp' WHERE id_perusahaan  = '$id_perusahaan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_pusat.php");
} else {
    //pesan error gagal update da
    echo "Data Gagal Diupate!";
}

?>