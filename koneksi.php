<?php
// Konfigurasi Database (Ganti sesuai setting Anda)
$server = "localhost";
$username = "root";
$password = "your_password"; // Ganti dengan password database Anda
$database = "aplikasi_data"; // Ganti dengan nama database Anda

// Melakukan koneksi
$koneksi = mysqli_connect($server, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Opsional: pesan sukses
// echo "Koneksi database berhasil!";
?>
