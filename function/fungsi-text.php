<?php
//Membuka/ memebuat file
$file = fopen("halo.txt","w");

//Menyiapkan text
$text = "Halo, \n";

//Mengisi file
fwrite($file, $text);

//Menyiapkan teks
$text = "Saya sedang belajar PHP \n";

//Mengisi file
fwrite($file, $text);

//Menutup file
fclose($file);
?>