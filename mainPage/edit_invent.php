<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id_barang = $_GET['id'];
    
    // Lakukan query untuk mendapatkan data nama_barang berdasarkan ID
    $query = "SELECT * FROM list_invent WHERE id_barang = '$id_barang'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    // Tampilkan form edit nama_barang
    ?>
    <form action="update_invent.php" method="post">
        <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
        <input type="text" name="lokasi_barang" value="<?php echo $row['lokasi_barang']; ?>">
        <button type="submit">Simpan Perubahan</button>
    </form>
    <?php
} else {
    echo "ID barang tidak valid atau tidak ditemukan.";
}
?>
