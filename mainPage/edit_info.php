<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_info = $_GET['id'];
    
    // Lakukan query untuk mendapatkan data nama berdasarkan ID
    $query = "SELECT * FROM list_info WHERE id_info = '$id_info'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Tampilkan form edit nama
    ?>
    <form action="update_info.php" method="post">
        <input type="hidden" name="id_info" value="<?php echo $row['id_info']; ?>">
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>">
        <input type="text" name="isi" value="<?php echo $row['isi']; ?>">
        <button type="submit">Simpan Perubahan</button>
    </form>
    <?php
} else {
    echo "ID info tidak valid atau tidak ditemukan.";
}
?>
