<?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
 
    ?>
    <?php 
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $pegawai = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style2.css">
  <script src="https://kit.fontawesome.com/cc247a28f7.js" crossorigin="anonymous"></script>
  <title>Falih Warnet | Admin</title>
</head>
<style type="text/css">

    p {
       font-size: 20px;
    } 
    body {
        padding-top: 56px;
        height: 100vh;
        width: 100%;
        background: linear-gradient(45deg, #d2001a,#7462ff,#f48e21,#23e5ab);
        background-size: 300% 300%;
        animation: color 12s ease-in-out infinite;
    }
    @keyframes color {
        0%{
            background-position: 0 50%;
        }
        50%{
            background-position: 100% 50%;
        }
        100%{
            background-position: 0 50%;
        }
    }
</style>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="btn" href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="halaman_admin.php">Beranda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="komputer2.php">Komputer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="keuangan.php">Keuangan</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="jumbotron">
      <h1 class="display-4">Selamat Datang di Website Resmi Kami</h1>
      <p class="lead"><center>

<br>
<form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off" required>
    <button type="submit" class="btn btn-light" name="cari">Cari!</button>
</form>
<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th><center>Aksi</center></th>
        <th>No.</th>
        <th>Kode Pegawai</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>No. Telepon</th>
        <th>Email</th>
        <th>Posisi</th>
        <th>Gambar</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $pegawai as $row ) : ?>
    <tr>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakin?');"><button type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i>Ubah</button></a></p>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Hapus</button></a>
        </td>
        <td><center><?= $i; ?></center></td>
        <td><center><?= $row["kodepegawai"]; ?></center></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["tanggallahir"]; ?></td>
        <td><?= $row["jeniskelamin"]; ?></td>
        <td><?= $row["nohp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["posisi"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="80" height="80"></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
</table></center></p>
      <hr class="my-4">
      <center>
      <p>Tetap terhubung dengan kami untuk mendapatkan informasi terbaru.</p>
      <a class="btn btn-primary btn-lg" href="tambah.php" role="button">Tambah</a>
      </center>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
