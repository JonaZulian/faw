<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profil.php">Profil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambah.php">Tambah data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>NO</th>
        <th>nama_barang</th>
        <th>jumlah</th>
      </tr>
    </thead>
  <?php
include"koneksi.php";
$no=1;
$data=mysqli_query($koneksi,"select*from barang");
while($d=mysqli_fetch_array($data)){
?>
    <tbody>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $d["nama_barang"]; ?></td>
         <td><?php echo $d["jumlah"]; ?></td>
          <td>
            <a href="edit.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-success">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-danger">HAPUS</a>
          </td>
     </tr>
    </tbody>
    <?php }?>

</table>
</body>
</html>