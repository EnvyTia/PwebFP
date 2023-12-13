<?php
session_start();

// Jika pengguna sudah login, arahkan ke halaman home
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: login.php");
    exit;
}

// Cek jika ada data login yang dikirimkan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username']; // Ganti dengan nama field email pada tabel anggota keluarga
    $password = $_POST['password']; // Ganti dengan nama field password pada tabel anggota keluarga

    // Contoh validasi login sederhana, sesuaikan dengan struktur tabel yang ada di database
    if ($username === 'email@example.com' && $password === 'password') {
        // Simpan sesi bahwa user sudah login
        $_SESSION['logged_in'] = true;
        
        // Redirect ke halaman home setelah login sukses
        header("Location: home.php");
        exit;
    } else {
        // Jika login gagal, berikan pesan error atau tindakan lain yang sesuai
        $error = "Login gagal. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - RumaKita</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login - RumaKita</h2>
        <?php if(isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
