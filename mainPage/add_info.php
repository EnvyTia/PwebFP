<?php
// Pastikan file ini hanya diakses melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'config.php';

    // Ambil data dari form tambah info
    $id_info = $_POST['id_info'];
    $nama = $_POST['nama'];
    // Proses unggahan (upload) foto
    $foto = ''; // Inisialisasi variabel untuk nama file foto

    // Cek apakah file foto berhasil diunggah
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $namaFile = $_FILES['foto']['name'];
        $lokasiSementara = $_FILES['foto']['tmp_name'];
        $tujuan = 'uploads/' . $namaFile; // Tentukan lokasi tujuan untuk menyimpan foto

        // Pindahkan foto yang diunggah ke folder tujuan
        if (move_uploaded_file($lokasiSementara, $tujuan)) {
            $foto = $namaFile; // Simpan nama file foto ke variabel $foto
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah foto.";
            exit; // Hentikan eksekusi skrip jika terjadi kesalahan
        }
    } else {
        echo "Gagal mengunggah foto atau foto tidak dipilih.";
        exit; // Hentikan eksekusi skrip jika foto tidak berhasil diunggah
    }

    $isi = $_POST['isi'];

    // Query untuk menambahkan info baru ke dalam tabel list info
    $query = "INSERT INTO list_info (id_info, nama, foto, isi) VALUES ('$id_info', '$nama', '$foto', '$isi')";

    if (mysqli_query($connection, $query)) {
        // Jika query berhasil dieksekusi, arahkan kembali ke halaman home
        header("Location: info.php");
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
