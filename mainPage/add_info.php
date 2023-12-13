<?php
// Pastikan file ini hanya diakses melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'config.php';

    // Ambil data dari form tambah info
    $id_info = $_POST['id_info'];
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
    $isi = $_POST['isi'];

    // Lakukan sanitasi dan validasi input sesuai kebutuhan
    // Contoh: $id_info = mysqli_real_escape_string($connection, $id_info);

    // Query untuk menambahkan info baru ke dalam tabel list info
    $query = "INSERT INTO list_info (id_info, nama, foto, isi) VALUES ('$id_info', '$nama', '$foto', '$isi')";

    if (mysqli_query($connection, $query)) {
        // Jika query berhasil dieksekusi, arahkan kembali ke halaman home
        header("Location: home.php");
        exit;
    } else {
        // Jika terjadi kesalahan saat eksekusi query
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    // Tutup koneksi database setelah selesai
    mysqli_close($connection);
} else {
    // Jika akses langsung ke file add_task.php tanpa menggunakan metode POST
    echo "Akses tidak diizinkan.";
}
?>
