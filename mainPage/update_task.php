<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tugas = $_POST['id_tugas'];
    $tugas = $_POST['tugas'];
    $deadline_tugas = $_POST['deadline_tugas'];
    $id_anggota = $_POST['id_anggota'];

    $query = "UPDATE list_tugas SET tugas='$tugas', deadline_tugas='$deadline_tugas', id_anggota='$id_anggota' WHERE id_tugas='$id_tugas'";

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

