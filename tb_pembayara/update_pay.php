<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_metode_pembayaran      = $_POST['id_metode_pembayaran'];
$nama_pay           = $_POST['nama_pay'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_metode_pembayaran SET nama_pay = '$nama_pay' WHERE id_metode_pembayaran = '$id_metode_pembayaran'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_pay.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>