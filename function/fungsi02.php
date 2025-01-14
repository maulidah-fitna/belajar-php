<?php
function sapa($nama){
    echo "Halo, $nama! Selamat Pagi!😊".PHP_EOL;
}

echo "Masukkan Nama Anda : ";
$nama = trim(fgets(STDIN));

sapa($nama);
?>