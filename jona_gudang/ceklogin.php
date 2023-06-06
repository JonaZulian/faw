<?php 
session_start();
include "koneksi.php";

$user=$_POST['user'];
$pass=$_POST['pass'];

$data=mysqli_query($koneksi,"select * from admin where username='$user' and password='$pass'");
$cek=mysqli_num_rows($data);
if($cek > 0){
    $_SESSION['user'] = $user;
    $_SESSION['status'] = "login";
    header("location:data.php");
}else{
    header("location:index.php?pesan=gagal");
}


?>