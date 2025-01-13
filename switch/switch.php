<?php
echo "Masukkan Kode \t: ";
$kode = trim(fgets(STDIN));

switch($kode){
    case 1:
        echo "Selamat Datang, Admin!";
        break;
    case 2:
        echo "Selamat Datang, User!";
        break;
    case 3:
        echo "Selamat Datang, Tamu!";
        break;
    default:
        echo "Maaf, Anda Siapa Ya?";
}
?>