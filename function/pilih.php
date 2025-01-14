<?php
// echo "kode_bangun\t|Nama_bangun\n";
// echo "-----------\t|-----------\n";
// echo "0\tPersegi\n";

// echo "Masukkan kode bangun dengan benar";
// $bangun = trim(fgets(STDIN));

echo "Masukkan nama bangun dengan benar : ";
$bangun = trim(fgets(STDIN));
include "fungsi.php";
switch($bangun){
    case "$bangun":
        persegi($l,$p);
        break;
    case "$persei_panjang":
        persegi_panjang($l,$p);
        break;   
    default :
    echo "Bangun yang anda masukkan tidak ada di daftar kami 😊"; break;
}
?>