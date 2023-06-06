<!DOCTYPE html>
<html>
<head>
  <title>yuhuu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="data.php">Kembali</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambah.php">tambah data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profil.php">profil perusahaan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak.php">Contact us</a>
      </li>
    </ul>
  </div>
</nav>

  <br/>
  <br/>
  <div class="container mt-3">
  <h3>EDIT DATA </h3>
  <?php
include"koneksi.php";
$id = $_GET['id'];
$no=1;
$data=mysqli_query($koneksi,"select*from barang where id='$id'");
while($d=mysqli_fetch_array($data)){
?>
   <form method="post" action="update.php">
    <div class="mb-3">
      <label >nama_barang:</label>
      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
    </div>
    <div class="mb-3">
      <label >jumlah</label>
      <input type="text" class="form-control" id="" name="jumlah" value="<?php echo $d['jumlah']; ?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
<?php 
  }
  ?>
 
   
</body>
</html>



