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
    <title>HomePortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="crud_pages.css">
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container">
        <div class="logo">
            <a href="#">HomePortal</a>
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
    <div class="info-list">
        <table>
            <thead>
                <tr>
                    <th>ID Info</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                
                // Ambil data dari tabel list tugas
                $query = "SELECT * FROM list_info";
                $result = mysqli_query($connection, $query);

                // Di dalam loop untuk menampilkan list tugas
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id_info']."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td><img src='uploads/".$row['foto']."' width='100'></td>"; 
                    echo "<td>".$row['isi']."</td>";
                    echo "<td><a href='edit_info.php?id=".$row['id_info']."'>Edit</a> | <a href='delete_info.php?id=".$row['id_info']."'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<div class="add-task">
        <form action="add_info.php" method="post" enctype="multipart/form-data">
            <h3>Tambah Info Baru</h3>
            <div class="form-row">
                <input type="number" name="id_info" placeholder="ID info" required>
                <input type="text" name="nama" placeholder="nama" required>
                <input type="file" name="foto" placeholder="gambar" required >
                
                <input type="text" name="isi" placeholder="isi" required>
                <button type="submit">Tambah Info</button>
            </div>
        </form>
    </div>
</div>



</body>
</html>
