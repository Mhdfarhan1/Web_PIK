<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pik Request</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css_ap/style.css" />
  <link rel="shortcut icon" href="images/logo.png" />
  
  <style>
    .scroll-wrapper {
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
      display: flex;
      overflow-x: auto;
    }

    .card-box {
      scroll-snap-align: start;
      width: 100%;
      max-width: 300px;
      min-width: 100%;
      border: 1px solid #ddd;
      padding: 1rem;
      background: rgb(247, 184, 75); /* Warna oren */
      transition: transform 0.3s ease-in-out;
      border-radius: 10px;
      font-weight: bold; /* Semua isi di dalam box bold */
      opacity: 0; /* Initial hidden */
      transform: translateY(20px); /* Initial position */
    }

    .card-box h4,
    .card-box .card-title {
      font-weight: 900; /* Judul lebih tebal */
      font-size: 1.3rem;
      margin-bottom: 0.5rem;
      color: #333; /* Warna teks lebih gelap untuk judul */
    }

    .card-box p,
    .card-box .card-text {
      font-weight: 700; /* Body text bold tapi lebih ringan dari judul */
      margin-bottom: 0.75rem;
      color: #555; /* Warna teks lebih lembut (abu-abu) */
    }

    .card-box a {
      font-weight: bold;
      text-decoration: underline;
      color: #000;
    }

    /* Animasi ketika elemen terlihat */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .card-box.animate-visible {
      opacity: 1;
      animation: fadeInUp 0.6s forwards; /* Pastikan animasi di-trigger */
    }

    @media (min-width: 768px) {
      .card-box {
        min-width: 250px;
      }
    }

    /* Carousel styling */
    .carousel-inner {
      position: relative;
    }

    .welcome-text {
      position: absolute;
      top: 95%;
      left: 0;
      transform: translateY(-400%);
      text-align: left;
      color: white;
      padding: 1rem;
      font-size: 1.5rem;
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

    .kerja-sama-box {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .kerja-sama-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .kerja-sama-box h4 {
        font-size: 1.5rem;
        color: #333;
        font-weight: bold;
    }

    .kerja-sama-box p {
        font-size: 1rem;
        color: #555;
        margin-bottom: 1rem;
    }

    .kerja-sama-box a {
        text-decoration: none;
        color: white;
    }

    .kerja-sama-box a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .kerja-sama-box {
            padding: 15px;
        }
    }

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
</head>
<body>

<div id="heroCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/baground.jpg" class="d-block w-100" alt="Landing Background" />
      <div class="welcome-text position-absolute">
        <span class="d-block mb-2"></span>
        <span class="d-block mb-2">Selamat Datang di Website PIK R Request</span>
        <span class="d-block mb-3">SMAN 1 Tasik Putri Puyu</span>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/baground1.jpg" class="d-block w-100" alt="Landing Background" />
    </div>
    <div class="carousel-item">
      <img src="images/baground2.jpg" class="d-block w-100" alt="Landing Background" />
    </div>
  </div>
</div>

<div class="container my-5 px-0">
  <div class="scroll-wrapper">
    <div class="card-box card text-center flex-shrink-0 me-3" id="card1">
      <h4 class="card-title">PRESTASI</h4>
      <p class="card-text">Informasi Prestasi.</p>
      <a href="#">Selengkapnya</a>
    </div>
    <div class="card-box card text-center flex-shrink-0 me-3" id="card2">
      <h4 class="card-title">Profile</h4>
      <p class="card-text">Informasi profil pik r Request.</p>
      <a href="#">Selengkapnya</a>
    </div>
    <div class="card-box card text-center flex-shrink-0 me-3" id="card3">
      <h4 class="card-title">Perlombaan</h4>
      <p class="card-text">Informasi lomba lomba.</p>
      <a href="#">Selengkapnya</a>
    </div>
    <div class="card-box card text-center flex-shrink-0 me-3" id="card4">
      <h4 class="card-title">Galeri</h4>
      <p class="card-text">Foto Foto Anggota.</p>
      <a href="#">Selengkapnya</a>
    </div>
  </div>
</div>

 <!-- GALERI FOTO OTOMATIS -->
<section class="container my-5">
    <div class="text-center">
    <h2 class="position-relative d-inline-block pb-2 galeri-title">Galeri Foto</h2>
    </div>
  <div class="gallery-wrapper overflow-hidden position-relative">
    <div class="gallery-track d-flex">
      <img src="images/galeri 1.jpg" class="gallery-img" alt="Galeri 1">
      <img src="images/galeri 2.jpg" class="gallery-img" alt="Galeri 2">
      <img src="images/galeri 3.jpg" class="gallery-img" alt="Galeri 3">
      <img src="images/galeri 4.jpg" class="gallery-img" alt="Galeri 4">
      <img src="images/galeri 5.jpg" class="gallery-img" alt="Galeri 5">
      <img src="images/galeri 6.jpg" class="gallery-img" alt="Galeri 6">
      <img src="images/galeri 7.jpg" class="gallery-img" alt="Galeri 7">
      <img src="images/galeri 8.jpg" class="gallery-img" alt="Galeri 8">
      <img src="images/galeri 9.jpg" class="gallery-img" alt="Galeri 9">
      <img src="images/galeri 10.jpg" class="gallery-img" alt="Galeri 10">
      <img src="images/galeri 11.jpg" class="gallery-img" alt="Galeri 11">

    </div>
  </div>
</section>
  
  
  <!-- GALERI FOTO OTOMATIS -->
  <section class="container my-5">
    <div class="text-center">
    <h2 class="position-relative d-inline-block pb-2 galeri-title">KEGIATAN DAN LOMBA</h2>
    </div>
</section>

    <!--List lomba -->
    <section id="kegiatan">
    <section class="container my-5">
  <div class="row justify-content-start">
    <div class="col-md-6">
      <div class="card shadow-sm p-4" style="background-color:rgb(249, 242, 219); border-left: 5px solid #ffc107;">
      <h4 class="mb-3 fw-bold text-dark text-center">Jenis-Jenis Kegiatan</h4>
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-transparent">Pertemuan Rutin setiap minggu</li>
          <li class="list-group-item bg-transparent">1 Desember memperingati hari HIV/AIDS</li>
          <li class="list-group-item bg-transparent">Unniversary Pik- r</li>
          <li class="list-group-item bg-transparent">Gelira (Genre peduli remaja)</li>
          <li class="list-group-item bg-transparent">pengenalan Ekskul Disaat PPDB</li>
        </ul>
      </div>
    </div>
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

    <!-- End List lomba -->

    <!-- kerja Sama -->
    <section class="container my-5">
    <div class="text-center">
        <h2 class="position-relative d-inline-block pb-2 galeri-title">KERJA SAMA</h2>
    </div>
    <div class="row mt-4">
        <!-- Box Kiri -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="kerja-sama-box p-4">
                <img src="images/box 1.jpg" alt="Foto Kerja Sama 1" class="img-fluid rounded mb-3">
                <h4 class="fw-bold">Kerja Sama Pertama</h4>
                <p>kami berkerja sama juga dengan Bhabinkabtibmas desa kudap yang bernama Pak Zikri.</p>
            </div>
        </div>

        <!-- Box Kanan -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="kerja-sama-box p-4">
                <img src="images/galeri 11.jpg" alt="Foto Kerja Sama 2" class="img-fluid rounded mb-3">
                <h4 class="fw-bold">Kerja Sama Kedua</h4>
                <p>Kami berkerja sama juga dengan FORUM GENRE MERANTI.</p>
            </div>
        </div>
    </div>

    <!-- Foto pembina dan kepsek -->
    <section class="container my-5">
    <div class="text-center">
        <h2 class="position-relative d-inline-block pb-2 galeri-title">Foto Pembina Dan Kepala Sekolah</h2>
    </div>
    <div class="row mt-4">
        <!-- Box Kiri -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="kerja-sama-box p-5">
                <img src="images/pembina.jpg" alt="Foto pembina" class="img-fluid rounded mb-3">
                <h4 class="fw-bold">Herlindawati</h4>
                <p>Pembina PIK -R REQUEST.</p>
            </div>
        </div>

        <!-- Box Kanan -->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="kerja-sama-box p-5">
                <img src="images/kepsek.jpg" alt="Foto Kerja Sama 2" class="img-fluid rounded mb-3">
                <h4 class="fw-bold">Samsul Arifin, M.Pd</h4>
                <p>Kepala Sekolah SMA NEGERI 1 TASIK PUTRI PUYU.</p>
            </div>
        </div>
    </div>
    <div class="w-full px-4 lg:w-1/2">
    <div class="text-center">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Kenal lebih jauh</h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Mari kunjungi sosial media milik
                        Kami.
                    </p>

                    <!-- Instragram -->
                    <a class="w-9 h-9 mr-3 rounded-full flex justify-center
                        items-center border border-slate-400 hover:border-primary 
                        hover:bg-primary hover:text-white text-slate-300"
                            href="https://www.instagram.com/pik_request_sman_01ttp?igsh=MWtmbzZqMTYwbnY4bg==" target="_blank">
                            <svg width="30px" class="fill-current" role="img" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 
                            1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 
                            3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 
                            1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 
                            24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 
                            2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 
                            0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 
                            1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 
                            4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 
                            1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 
                            0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
     
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll(".card-box");

        const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
            const card = entry.target;
            card.classList.add("animate-visible"); // Pastikan animasi terpicu
            observer.unobserve(card); // Animasi hanya sekali
            }
        });
        }, {
        threshold: 0.2, // Perhatikan 20% dari elemen terlihat
        });

        cards.forEach((card) => {
        observer.observe(card); // Mengamati setiap card
        });
    });
    </script>

    </body>
    </html>

    <?php include 'footer.php'; ?>
