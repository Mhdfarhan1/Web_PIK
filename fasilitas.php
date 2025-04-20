<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fasilitas-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        .fasilitas-title {
            text-align: center;
            margin-bottom: 40px;
        }
        .fasilitas-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .fasilitas-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    
<!-- Fasilitas Section -->
    <div class="fasilitas-section">
        <div class="container">
            <h2 class="fasilitas-title display-4">Fasilitas Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="fasilitas-card">
                        <h4 class="card-title">Ruangan Sekretaris</h4>
                        <p class="card-text">Ruangan tersebut digunakan untuk kumpul rutin tiap minggu dan sekaligus digunakan untuk ruang konseling.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fasilitas-card">
                        <h4 class="card-title">Pohon Karakter</h4>
                        <p class="card-text">digunakan untuk siswa yang memiliki minat bakat sesuai alurnya.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fasilitas-card">
                        <h4 class="card-title">Fasilitas 3</h4>
                        <p class="card-text">Sturuktur organisasi 60x90, lemaari arsip, lemari piala, buku Ks ( konseling remaja) dan Ps (pendidik sebaya), kipas angin,
                            Poster Genre, Buku genre, Genre kid, buku ekspedisi surat masuk dan keluar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>