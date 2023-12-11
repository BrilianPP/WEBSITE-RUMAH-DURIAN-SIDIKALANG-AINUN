<?php
include 'koneksi.php';

$id_barang=$_GET['id_barang'];

if(!empty($id_barang)){
    mysqli_query($con, "DELETE FROM barang WHERE id_barang = '$id_barang'");
    header('location:tampilbrg.php');
}else{
    header('location:tampilMhs.php');
}

?>