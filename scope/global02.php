<?php
$nama = "Doni"; //Global
$orang = "Sehat ";

function sapa(){
    global $nama, $orang; //Agar bisa memanggil variabel global
    echo  $orang, $nama;
}

sapa();
?>