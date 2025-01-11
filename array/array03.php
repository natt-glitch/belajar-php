<?php
// Array 2 dimensi

$siswa = [
    "nama" => "Dita leni",
    "kelas" => 11,
    "alamat" => [
        "desa" => "Rejosari",
        "kec" => "Kebonsari",
        "kab" => "Madiun",
    ]
];

echo $siswa["nama"].PHP_EOL;
echo $siswa["kelas"].PHP_EOL;
echo $siswa["alamat"]["desa"].PHP_EOL;
echo $siswa["alamat"]["kec"].PHP_EOL;
echo $siswa["alamat"]["kab"].PHP_EOL;

?>
