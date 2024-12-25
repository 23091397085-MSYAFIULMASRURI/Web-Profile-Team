<?php
$servername = "localhost"; // Atau nama host lainnya
$username = "root"; // Username database Anda
$password = "ruri123"; // Password database Anda (kosong jika default XAMPP)
$dbname = "team_profile"; // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
