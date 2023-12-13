<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_info = $_GET['id'];

    $query = "DELETE FROM list_info WHERE id_info='$id_info'";

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
