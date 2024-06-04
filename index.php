<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cari Karakteristik Padi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cari Karakteristik Padi</h1>
        <!-- Menambahkan gambar -->
        <img src="images/padikita_logo.jpg" alt="Padi" class="padikita_logo-image">
        <form action="cari_karakteristik.php" method="post">
            <label for="jenis">Jenis Padi:</label>
            <input type="text" id="jenis" name="jenis" required><br>
            <input type="submit" value="Cari">
        </form>
        <div id="result">
            <!-- Hasil pencarian akan ditampilkan di sini -->
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Jenis padi yang dapat dicari:</p>
        <ul>
            <li>64</li>
            <li>Bramo</li>
            <li>Mentik Wangi</li>
            <li>Bagendit</li>
            <li>Raja Lele</li>
        </ul>
        <p class="rights">&copy; 2024 PadiKita. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
