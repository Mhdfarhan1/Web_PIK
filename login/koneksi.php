<?php
$host = "localhost";  
$user = "root";       
$pass = "";           
$db   = "sekolah_db";  // Pastikan ini benar!

$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah tabel users ada
$query = "SHOW TABLES LIKE 'users'";
$result = $conn->query($query);

if ($result->num_rows == 0) {
    die("Error: Tabel 'user' tidak ditemukan. Pastikan sudah dibuat di database.");
}
?>
