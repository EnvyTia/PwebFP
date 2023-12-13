<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_info = $_POST['id_info'];
    $nama = $_POST['nama'];
    $isi = $_POST['isi'];

    $query = "UPDATE list_info SET nama='$nama', isi='$isi' WHERE id_info='$id_info'";

    if (mysqli_query($connection, $query)) {
        header("Location: info.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
} else {
    echo "Akses tidak diizinkan.";
}
?>

