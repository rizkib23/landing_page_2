<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama_supplier          = $_POST['nama_supplier'];
$hp             = $_POST['hp'];
$alamat         = $_POST['alamat'];
$no_rekening    = $_POST['no_rekening'];

//query insert data ke dalam database
$query = "INSERT INTO tb_supplier (nama_supplier, hp, alamat, no_rekening) VALUES ('$nama_supplier', '$hp', '$alamat', '$no_rekening')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_spr.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>