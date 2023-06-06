<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
 
// update data ke database
mysqli_query($koneksi,"update barang set nama_barang='$nama_barang', jumlah='$jumlah' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data.php");
 
?>

