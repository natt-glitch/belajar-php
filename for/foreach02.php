<?php
$siswa = [
    "siswa1"=>[
        "nama" => "Nata Decoco",
        "kelas" => 12 
    ],
    "siswa2"=>[
    "nama" => "Nata Doremi",
    "kelas" => 10
]
    ];

// foreach ($siswa as $a => $b) {
//     echo "$a \n";
//     foreach($b as $c => $d){
//         echo "$c \t: $d \n";
//     }
// }

foreach($siswa as $murid => $santri){
    echo strtoupper($murid).PHP_EOL;
    foreach($santri as $data => $isi){
        echo ucwords($data)." \t: ". $isi . PHP_EOL;
    }
}
?>
