<?php
// Pastikan file ini hanya diakses melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'config.php';

    // Ambil data dari form tambah tugas
    $id_tugas = $_POST['id_tugas'];
    $tugas = $_POST['tugas'];
    $deadline_tugas = $_POST['deadline_tugas'];
    $id_anggota = $_POST['id_anggota'];

    // Lakukan sanitasi dan validasi input sesuai kebutuhan
    // Contoh: $id_tugas = mysqli_real_escape_string($connection, $id_tugas);

    // Query untuk menambahkan tugas baru ke dalam tabel list tugas
    $query = "INSERT INTO list_tugas (id_tugas, tugas, deadline_tugas, id_anggota) VALUES ('$id_tugas', '$tugas', '$deadline_tugas', '$id_anggota')";

    if (mysqli_query($connection, $query)) {
        // Jika query berhasil dieksekusi, arahkan kembali ke halaman home
        header("Location: info_task.php");
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
