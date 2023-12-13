<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'mainPage/config.php'; // Pastikan file konfigurasi database (config.php) sudah ada

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query ke database untuk memeriksa email
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['nama'];
            header("Location: home.php");
            exit;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Email tidak ditemukan!";
    }
} else {
    echo "Akses tidak diizinkan.";
}
?>
