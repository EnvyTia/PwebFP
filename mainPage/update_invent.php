<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $lokasi_barang = $_POST['lokasi_barang'];

    $query = "UPDATE list_invent SET nama_barang='$nama_barang', lokasi_barang='$lokasi_barang' WHERE id_barang='$id_barang'";

    if (mysqli_query($connection, $query)) {
        header("Location: inventori.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
} else {
    echo "Akses tidak diizinkan.";
}
?>

