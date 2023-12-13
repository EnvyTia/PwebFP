<!DOCTYPE html>
<html>
<head>
    <title>HomePortal</title>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
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

    <div class="task-list">
        <table>
            <thead>
                <tr>
                    <th>Pekerjaan Rumah</th>
                    <th>Deadline</th>
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
                    echo "<td>".$row['tugas']."</td>";
                    echo "<td>".$row['deadline_tugas']."</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <div id="weather-widget">
    <h2>Cuaca Hari Ini</h2>
    <p>Lokasi: Surabaya Timur</p>
    <p>Cuaca: <span id="weather"></span></p>
    <p>Suhu: <span id="temperature"></span> &deg;C</p>
</div>
</div>

<script>
    // Fungsi untuk mendapatkan data cuaca dari API
    function getWeatherData() {
        const apiKey = 'YOUR_API_KEY'; // Ganti dengan kunci API Anda dari layanan cuaca
        const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Jakarta&units=metric&appid=${apiKey}`;

        $.getJSON(apiUrl, function(data) {
            $('#location').text(data.name);
            $('#weather').text(data.weather[0].description);
            $('#temperature').text(data.main.temp);
        });
    }

    // Panggil fungsi saat halaman dimuat
    $(document).ready(function() {
        getWeatherData();
    });
</script>


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

    // Set interval untuk menampilkan card berikutnya setiap 6 detik
    setInterval(showNextCard, 6000);
</script>

</body>
</html>
