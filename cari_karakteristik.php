<?php
include 'koneksi.php';


// Pastikan data dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah input jenis padi telah dikirimkan
    if (isset($_POST['jenis'])) {
        $jenis = mysqli_real_escape_string($db, $_POST['jenis']);

        // Periksa apakah jenis padi tidak kosong
        if (!empty($jenis)) {
            // Jalankan query SQL untuk mencari karakteristik berdasarkan jenis padi
            $sql = "SELECT * FROM tanaman_padi WHERE jenis = '$jenis'";
            $result = mysqli_query($db, $sql);

            if ($result) {
                // Periksa apakah data ditemukan
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    // Tampilkan karakteristik padi
                    echo "<h2>Karakteristik Padi: {$row['jenis']}</h2>";
                    echo "<p>Bentuk Biji: {$row['bentuk_biji']}</p>";
                    echo "<p>Teknik: {$row['teknik']}</p>";
                    echo "<p>Ketahanan Hama: {$row['ketahanan_hama']}</p>";
                    echo "<p>Ketahanan Angin: {$row['ketahanan_angin']}</p>";
                    echo "<p>Kesulitan Perawatan: {$row['kesulitan_perawatan']}</p>";
                    echo "<p>Kualitas Beras: {$row['kualitas_beras']}</p>";
                    echo "<p>Kualitas Gabah: {$row['kualitas_gabah']}</p>";
                    echo "<p>Harga Beras: {$row['harga_beras']}</p>";
                    echo "<p>Harga Gabah: {$row['harga_gabah']}</p>";
                    echo "<p>Hasil Panen: {$row['hasil_panen']}</p>";
                    echo "<p>Umur Panen: {$row['umur_panen']}</p>";
                } else {
                    echo "Jenis padi tidak ditemukan.";
                }
            } else {
                echo "Terjadi kesalahan dalam eksekusi query: " . mysqli_error($db);
            }
        } else {
            echo "Jenis padi tidak boleh kosong.";
        }
    } else {
        echo "Data jenis tidak ditemukan dalam request.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
