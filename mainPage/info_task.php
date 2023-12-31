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
    <div class="task-list">
        <table>
            <thead>
                <tr>
                    <th>ID Tugas</th>
                    <th>Tugas</th>
                    <th>Deadline</th>
                    <th>ID Anggota</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                
                // Ambil data dari tabel list tugas
                $query = "SELECT * FROM list_tugas";
                $result = mysqli_query($connection, $query);

                // Di dalam loop untuk menampilkan list tugas
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id_tugas']."</td>";
                    echo "<td>".$row['tugas']."</td>";
                    echo "<td>".$row['deadline_tugas']."</td>";
                    echo "<td>".$row['id_anggota']."</td>";
                    echo "<td><a href='edit_task.php?id=".$row['id_tugas']."'>Edit</a> | <a href='delete_task.php?id=".$row['id_tugas']."'>Hapus</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<div class="add-task">
        <form action="add_task.php" method="post">
            <h3>Tambah Tugas Baru</h3>
            <div class="form-row">
                <input type="number" name="id_tugas" placeholder="ID Tugas" required>
                <input type="text" name="tugas" placeholder="Tugas" required>
                <input type="date" name="deadline_tugas" required>
                <input type="number" name="id_anggota" placeholder="ID Anggota" required>
                <button type="submit">Tambah Tugas</button>
            </div>
        </form>
    </div>
</div>



</body>
</html>
