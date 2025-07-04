<!DOCTYPE html>
<html>
<body>
    <form method="get" action="">
        Nama: <input type="text" name="nama">
        <input type="submit">
    </form>
    <br>
    <?php
    if (isset($_GET['nama'])) {
        $nama = htmlspecialchars($_GET['nama']);
        echo "Halo, " . $nama . "!"; 
        // Menampilkan URL lengkap untuk observasi
        echo "<br><br><small>URL saat ini: " . $_SERVER['REQUEST_URI'] . "</small>";
    }
    ?>
</body>
</html>