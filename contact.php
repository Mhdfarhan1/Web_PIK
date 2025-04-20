<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - PIK REQUEST</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background: url('images/contact-bg.jpg') no-repeat center center fixed; /* Ganti dengan gambar latar belakang yang sesuai */
            background-size: cover;
            color: white;
        }
        .contact-section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            backdrop-filter: blur(5px); /* Efek blur di belakang */
        }
        .contact-card {
            background-color: rgba(0, 0, 0, 0.7); /* Latar belakang transparan */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
        .btn-whatsapp {
            width: 200px; /* Atur lebar tombol */
            transition: background-color 0.3s ease;
        }
        .btn-whatsapp:hover {
            background-color: #25D366; /* Warna hijau WhatsApp saat hover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/logo.png" alt="Universitas Indonesia Logo" class="me-2" style="height: 50px; width: 50px;">
                <span class="text-white fs-5 fw-bold">PIK REQUEST</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contact-section">
        <div class="contact-card">
            <h1 class="display-4">Hubungi Kami di WhatsApp</h1>
            <p class="lead">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui WhatsApp.</p>
            <a href="https://wa.me/6282229245081?text=Halo,%20saya%20ingin%20bertanya%20tentang..." target="_blank" class="btn btn-success btn-whatsapp">Open WhatsApp</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
