<?php
// Pastikan file ini hanya diakses melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'config.php';

    // Ambil data dari form tambah tugas
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $lokasi_barang = $_POST['lokasi_barang'];

    $query = "INSERT INTO list_invent (id_barang, nama_barang, lokasi_barang) VALUES ('$id_barang', '$nama_barang', '$lokasi_barang')";

    if (mysqli_query($connection, $query)) {
        // Jika query berhasil dieksekusi, arahkan kembali ke halaman home
        header("Location: inventori.php");
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
