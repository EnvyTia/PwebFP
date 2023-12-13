<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_barang = $_GET['id'];

    $query = "DELETE FROM list_invent WHERE id_barang='$id_barang'";

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
