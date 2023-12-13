<?php
session_start();

// Pastikan user sudah login sebelum mengakses halaman ini
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>RumaKita</title>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="crud_pages.css">
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container">
        <div class="logo">
            <a href="#">RumaKita</a>
        </div>
        <button class="navbar-toggler" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="menu">
            <ul class="nav">
                <!-- <li><a href="#" class="active">Home</a></li> -->
                <li class="dropdown">
                    <a href="home.php">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="main-content">
    <div class="task-list">
        <table>
            <thead>
                <tr>
                    <th>ID Barang</th>
                    <th>Barang</th>
                    <th>Lokasi Barang</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                
                // Ambil data dari tabel list tugas
                $query = "SELECT * FROM list_invent";
                $result = mysqli_query($connection, $query);

                // Di dalam loop untuk menampilkan list tugas
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id_barang']."</td>";
                    echo "<td>".$row['nama_barang']."</td>";
                    echo "<td>".$row['lokasi_barang']."</td>";
                    echo "<td><a href='edit_invent.php?id=".$row['id_barang']."'>Edit</a> | <a href='delete_invent.php?id=".$row['id_barang']."'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<div class="add-task">
        <form action="add_invent.php" method="post">
            <h3>Tambah Barang Baru</h3>
            <div class="form-row">
                <input type="number" name="id_barang" placeholder="ID Barang" required>
                <input type="text" name="nama_barang" placeholder="Nama Barang" required>
                <input type="text" name="lokasi_barang" placeholder="Lokasi" required>
                <button type="submit">Tambah Barang</button>
            </div>
        </form>
    </div>
</div>


</body>
</html>
