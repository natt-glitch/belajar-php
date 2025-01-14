<?php
$nama = "Doni";//global

function sapa(){
    $orang = "sehat";//local
    echo $orang;
}
sapa();
echo $nama;
?>