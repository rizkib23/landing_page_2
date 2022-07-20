<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama_pusat           = $_POST['nama_pusat'];
$alamat         = $_POST['alamat'];
$no_hp             = $_POST['no_hp'];
$email              = $_POST['email'];
$tanggal_berdiri    = $_POST['tanggal_berdiri'];
$npwp             = $_POST['npwp'];

//query insert data ke dalam database
$query = "INSERT INTO tb_perusahaan (nama_pusat, alamat, no_hp, email, tanggal_berdiri, npwp) VALUES ('$nama_pusat', '$alamat', '$no_hp', '$email', '$tanggal_berdiri', '$npwp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_pusat.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>