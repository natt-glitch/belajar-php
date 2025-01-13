<?php
echo "Masukkan nilai anda pak 🧐 \n:";
$nilai = trim(fgets(STDIN));

if ($nilai <= 0) {
    echo "Maaf anda belum mengikuti ujian";
}
elseif ($nilai < 60) {
    echo "Nilai : $nilai\n";
    echo "Grade : E";
}
elseif($nilai < 70) {
    echo "Nilai : $nilai\n";
    echo "Grade : D";
}
elseif($nilai < 80) {
    echo "Nilai : $nilai\n";
    echo "Grade : C";
}
elseif($nilai < 90) {
    echo "Nilai : $nilai\n";
    echo "Grade : B";
}
elseif($nilai <= 100) {
    echo "Nilai : $nilai\n";
    echo "Grade : A";
}
else {
    echo "Maaf nilai tidak sah";
}
?>