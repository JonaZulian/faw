<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('$id','$nama_barang','$jumlah')");
 
// mengalihkan halaman kembali ke index.php
header("location:data.php");
 
?>