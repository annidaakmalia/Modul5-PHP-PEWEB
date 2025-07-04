<?php
// Indexed array of classmates
$teman_kelas = array(
    "Aufa",
    "Aqhlia",
    "Putri",
    "Intan",
    "April",
    "Diva"
);
// Menampilkan daftar teman sekelas menggunakan foreach
echo "<h3>Daftar Teman Sekelas:</h3>";
echo "<ul>";
foreach ($teman_kelas as $nama) {
    echo "<li>$nama</li>";
}
echo "</ul>";
?>