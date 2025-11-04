<?php
// 1. Memanggil file koneksi database
include 'koneksi.php'; 

// Cek apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Ambil data dari form (Contoh: field 'nama')
    $nama_input = isset($_POST['nama']) ? $_POST['nama'] : '';
    // Mencegah SQL Injection dan membersihkan input
    $nama_bersih = mysqli_real_escape_string($koneksi, $nama_input); 

    // 3. Validasi sederhana
    if (empty($nama_bersih)) {
        echo "Nama tidak boleh kosong! Kembali ke <a href='index.html'>Home</a>";
    } else {
        // 4. Query SQL untuk INSERT data (Asumsi nama tabel adalah 'pengguna')
        $sql = "INSERT INTO pengguna (nama) VALUES ('$nama_bersih')";

        // 5. Eksekusi query
        if (mysqli_query($koneksi, $sql)) {
            echo "Data **$nama_bersih** berhasil ditambahkan ke database! ✅ <br><br> Kembali ke <a href='index.html'>Home</a>";
        } else {
            echo "Error saat menambahkan data: " . mysqli_error($koneksi) . " ❌";
        }
    }
    
    // 6. Tutup koneksi database
    mysqli_close($koneksi);
} else {
    // Jika diakses tanpa submit form
    echo "Akses ditolak. Silakan submit data melalui form di <a href='index.html'>Home</a>.";
}
?>
