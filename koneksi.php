<?php
// Konfigurasi Database (Ganti sesuai setting Anda)
$server = "localhost";
$username = "root";
$password = "your_password"; // Pastikan Anda mengisi password yang benar
$database = "aplikasi_data"; // Pastikan nama database sudah benar

// Melakukan koneksi
$koneksi = mysqli_connect($server, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Jika koneksi berhasil, tidak ada output yang ditampilkan (clean code)
?>
