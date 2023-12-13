<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_tugas = $_GET['id'];
    
    // Lakukan query untuk mendapatkan data tugas berdasarkan ID
    $query = "SELECT * FROM list_tugas WHERE id_tugas = '$id_tugas'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Tampilkan form edit tugas
    ?>
    <form action="update_task.php" method="post">
        <input type="hidden" name="id_tugas" value="<?php echo $row['id_tugas']; ?>">
        <input type="text" name="tugas" value="<?php echo $row['tugas']; ?>">
        <input type="date" name="deadline_tugas" value="<?php echo $row['deadline_tugas']; ?>">
        <input type="number" name="id_anggota" value="<?php echo $row['id_anggota']; ?>">
        <button type="submit">Simpan Perubahan</button>
    </form>
    <?php
} else {
    echo "ID Tugas tidak valid atau tidak ditemukan.";
}
?>
