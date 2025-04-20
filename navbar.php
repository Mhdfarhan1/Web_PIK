<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
     /* Pastikan body dan html memenuhi tinggi halaman */
     html, body {
      height: 100%;
    }

    /* Flexbox setup untuk body */
    body {
      display: flex;
      flex-direction: column;
    }

    /* Menjaga footer di bawah halaman */
    footer {
      margin-top: auto;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="images/logo.png" alt="pik logo" class="me-2" style="height: 50px; width: 50px;">
      <span class="text-white fs-5 fw-bold">PIK REQUEST</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'prestasi.php') ? 'active' : ''; ?>" href="prestasi.php">Prestasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'fasilitas.php') ? 'active' : ''; ?>" href="fasilitas.php">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'kegiatan_lomba.php') ? 'active' : ''; ?>" href="kegiatan_lomba.php">Agenda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Kerja Sama</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
