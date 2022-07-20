<?php

//include koneksi database
include('../konek.php');

//get data dari form
$nama_cb           = $_POST['nama_cb'];
$alamat           = $_POST['alamat'];
$no_tlp             = $_POST['no_tlp'];
$email                  =$_POST['email'];
$id_perusahaan    =$_POST['id_perusahaan'];

//query insert data ke dalam database
$query = "INSERT INTO tb_cabang (nama_cb, alamat, no_tlp, email, id_perusahaan) VALUES ('$nama_cb', '$alamat', '$no_tlp', '$email', '$id_perusahaan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_cb.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>