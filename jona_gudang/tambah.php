<html>
<head>
<title>Bootstrap Example</title>
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
<div class="container">
<div>
     <h2>Formulir Pendataan guru</h2>

</div>

<form method="post" action="tambahaksi.php">
  <div class="mb-3 mt-3">
  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <label  class="form-label">nama_barang</label>
    <input type="text" class="form-control" name="nama_barang">
  </div>

  <form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label  class="form-label">jumlah</label>
    <input type="text" class="form-control" name="jumlah">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</body>
</html>