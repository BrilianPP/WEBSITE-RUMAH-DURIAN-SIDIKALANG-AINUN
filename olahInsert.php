<?php
include"koneksi.php";

$nama=$_POST['nama'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];
$gambar=$_POST['gambar'];
$deskripsi=$_POST['deskripsi'];

if(!empty(nama)&& !empty(stok)&& !empty(harga)&& !empty(gambar)&& !empty(deskripsi)){
    mysqli_query($con, "INSERT INTO barang(nama,stok,harga,gambar,deskripsi)VALUES ('$nama','$stok','$harga','$gambar','$deskripsi')");
    header('location:tampilbrg.php');
}else{
    header('location:formInsert.php');
}
?>