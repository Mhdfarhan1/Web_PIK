<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Jenis-Jenis Kegiatan dan Lomba</title>
</head>
<style>
    /* Memberikan margin-top untuk menghindari tertutup navbar */
    body {
      padding-top: 70px; /* Sesuaikan dengan tinggi navbar Anda */
    }

    .galeri-title::after {
    content: "";
    display: block;
    width: 60px;
    height: 4px;
    background-color: #f7b84b; /* Warna kuning/oren */
    margin: 8px auto 0;
    border-radius: 2px;
    }
</style>
<body>

<!-- List lomba -->
<section class="container my-5">
    <div class="text-center">
        <h2 class="position-relative d-inline-block pb-2 galeri-title">KERJA SAMA</h2>
    </div>
    <div class="row mt-4">
      
      <!-- Jenis-Jenis Kegiatan -->
      <div class="col-md-6">
        <div class="card shadow-sm p-4" style="background-color:rgb(249, 242, 219); border-left: 5px solid #ffc107;">
          <h4 class="mb-3 fw-bold text-dark text-center">Jenis-Jenis Kegiatan</h4>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent">Pertemuan Rutin setiap minggu</li>
            <li class="list-group-item bg-transparent">1 Desember memperingati hari HIV/AIDS</li>
            <li class="list-group-item bg-transparent">Unniversary Pik- r</li>
            <li class="list-group-item bg-transparent">Gelira (Genre peduli remaja)</li>
            <li class="list-group-item bg-transparent">Pengenalan Ekskul Disaat PPDB</li>
          </ul>
        </div>
      </div>

      <!-- Jenis-Jenis Lomba -->
      <div class="col-md-6">
        <div class="card shadow-sm p-4" style="background-color:rgb(249, 242, 219); border-left: 5px solid #ffc107;">
          <h4 class="mb-3 fw-bold text-dark text-center">Jenis-Jenis Lomba</h4>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent">Lomba Cerdas Cermat</li>
            <li class="list-group-item bg-transparent">Lomba Video Kreatif GENRE</li>
            <li class="list-group-item bg-transparent">Lomba Rangking 1</li>
            <li class="list-group-item bg-transparent">Lomba Duta Genre</li>
            <li class="list-group-item bg-transparent">Lomba Penyuluhan</li>
          </ul>
        </div>
      </div>

    </div>
  </section>
</section>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>
