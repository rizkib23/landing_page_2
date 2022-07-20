<?php

//include koneksi database
include('../konek.php');



//get data dari form
$nama           = $_POST['nama'];
$stok           = $_POST['stok'];
$harga_modal     = $_POST['harga_modal'];
$harga_jual     = $_POST['harga_jual'];
$tanggal_masuk  = $_POST['tanggal_masuk'];
$id_kategori       =$_POST['id_kategori'];
$id_supplier      =$_POST['id_supplier'];

//query insert data ke dalam database
$query = "INSERT INTO tb_barang (nama, stok, harga_modal, harga_jual, tanggal_masuk, id_kategori, id_supplier) VALUES ('$nama', '$stok', '$harga_modal', '$harga_jual', '$tanggal_masuk', '$id_kategori', '$id_supplier')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_brg.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>