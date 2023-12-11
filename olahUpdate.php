<?php
include "koneksi.php";

$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];

if (!empty($nama) && !empty($stok) && !empty($harga) && !empty($gambar) && !empty($deskripsi)){
    mysqli_query($con, "UPDATE barang SET nama='$nama',stok='$stok', harga='$harga', gambar='$gambar', deskripsi='$deskripsi' 
    WHERE id_barang='$id_barang'");
    header('location:tampilbrg.php');
}else{
    header('location:formUpdate.php');
}
?>

