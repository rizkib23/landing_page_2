<?php

//include koneksi database
include('../konek.php');

//get data dari form
$id_barang      = $_POST['id_barang'];
$nama           = $_POST['nama'];
$stok           = $_POST['stok'];
$harga_modal    = $_POST['harga_modal'];
$harga_jual     = $_POST['harga_jual'];
$tanggal_masuk  =$_POST['tanggal_masuk'];
$id_kategori       =$_POST['id_kategori'];
$id_supplier  =$_POST['id_supplier'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tb_barang SET nama = '$nama', stok = '$stok', harga_modal = '$harga_modal', harga_jual = '$harga_jual', tanggal_masuk = '$tanggal_masuk', id_kategori ='$id_kategori', id_supplier ='$id_supplier' WHERE id_barang = '$id_barang'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_brg.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>