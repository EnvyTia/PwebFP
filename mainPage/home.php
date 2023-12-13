<!DOCTYPE html>
<html>
<head>
    <title>RumaKita</title>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* Tambahkan styling card di dalam tag <style> */
        .card {
            display: none;
            width: 300px;
            height: 450px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 5%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 300px;
            height: 300px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
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
                    <a href="#" class="dropbtn">Editing</a>
                    <div class="dropdown-content">
                        <a href="info.php">Info</a><br>
                        <a href="member.php">Member</a><br>
                        <a href="inventori.php">Inventori</a><br>
                        <a href="info_task.php">Housework</a><br>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main-content">
    <div class="info-cards">
        <?php
        include 'config.php';

        // Ambil data dari tabel list_info
        $query = "SELECT * FROM list_info";
        $result = mysqli_query($connection, $query);

        // Di dalam loop untuk menampilkan list info dalam bentuk card
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='card'>";
            echo "<img src='uploads/" . $row['foto'] . "' alt='" . $row['nama'] . "'>";
            echo "<h3>" . $row['nama'] . "</h3>";
            echo "<p>" . $row['isi'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<script>
    // Menggunakan JavaScript untuk mengatur transisi antar card setiap 10 detik
    const cards = document.querySelectorAll('.card');
    let index = 0;

    function showNextCard() {
        cards.forEach(card => card.style.display = 'none'); // Sembunyikan semua card
        cards[index].style.display = 'block'; // Tampilkan card yang sesuai dengan index saat ini
        index = (index + 1) % cards.length; // Perbarui index untuk card selanjutnya
    }

    // Tampilkan card pertama saat halaman dimuat
    showNextCard();

    // Set interval untuk menampilkan card berikutnya setiap 10 detik
    setInterval(showNextCard, 10000);
</script>

</body>
</html>
