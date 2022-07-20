<?php

include('../konek.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tb_member WHERE id_member = '$id'";

if($connection->query($query)) {
    header("location: index_mem.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>