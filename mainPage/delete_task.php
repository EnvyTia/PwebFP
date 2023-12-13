<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_tugas = $_GET['id'];

    $query = "DELETE FROM list_tugas WHERE id_tugas='$id_tugas'";

    if (mysqli_query($connection, $query)) {
        header("Location: home.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
} else {
    echo "Akses tidak diizinkan.";
}
?>
