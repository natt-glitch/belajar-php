<?php
echo "Sstttt, masukkan kode rahasianya : ";
$kode = trim(fgets(STDIN));

switch($kode){
    case 1 :
        echo "Selamat datang Master 😊";
        break;
    case 2 :
        echo "Selamat datang User 😀";
        break;
    case 3 :
        echo "Selamat datang tamu 🤗";
        break;
    default :
        echo "Hayoooloooooo mau bobol yaa 🧐🤪🤭";
        break;
    
}
?>