<?php

//include koneksi database
include('../konek.php');

//get data dari form    
$nama           = $_POST['nama'];
$no_hp           = $_POST['no_hp'];
$alamat           = $_POST['alamat'];
$jenis_kelamin      = $_POST['jenis_kelamin'];


//query insert data ke dalam database
$query = "INSERT INTO tb_member (nama, no_hp, alamat, jenis_kelamin ) VALUES ('$nama', '$no_hp', '$alamat', '$jenis_kelamin' )";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_mem.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>