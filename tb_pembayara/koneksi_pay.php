<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama_pay           = $_POST['nama_pay'];

//query insert data ke dalam database
$query = "INSERT INTO tb_metode_pembayaran (nama_pay) VALUES ('$nama_pay')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_pay.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>