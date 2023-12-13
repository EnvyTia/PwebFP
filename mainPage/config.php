<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home_database";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>