<?php
$kalimat = "STITEK Bontang adalah kampus IT terbaik";
// Mengubah kalimat menjadi huruf kapital
$kalimat_kapital = strtoupper($kalimat);
echo "Panjang kalimat: " . strlen($kalimat) . "<br>";
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";
echo "Mengganti kata: " . str_replace("terbaik", "favorit", $kalimat) . "<br>";
echo "Kalimat dalam huruf kapital: " . $kalimat_kapital;
?>