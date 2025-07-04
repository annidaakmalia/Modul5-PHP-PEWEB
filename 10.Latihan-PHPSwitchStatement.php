<?php
$ukuran_baju = "L"; 
switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Kecil (Small) - Cocok untuk badan kecil";
        break;
    case "M":
        echo "Ukuran Sedang (Medium) - Paling banyak tersedia";
        break;
    case "L":
        echo "Ukuran Besar (Large) - Untuk badan yang lebih besar";
        break;
    case "XL":
        echo "Ukuran Extra Large - Untuk badan yang lebih berisi";
        break;
    default:
        echo "Ukuran tidak tersedia dalam sistem kami";
}
?>