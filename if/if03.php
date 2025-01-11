<?php
echo "Masukkan nama \t: ";
$nama = trim(fgets(STDIN));
echo "Masukkan nilai \t: ";
$nilai = trim(fgets(STDIN));

if ($nilai >= 80) {
    echo "Selamat $nama anda lulus 😁😉";
}
else{
    echo "Selamat $nama kamu sudah berusaha, kembali lagi lain waktu 😥😔";
}
?>