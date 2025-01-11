<?php
echo "Masukkan Nama \t: ";
$nama = trim(fgets(STDIN));
echo "Masukkan Nilai Anda : ";
$nilai = trim(fgets(STDIN));

if($nilai>=80){
    echo "Selamat, Anda Lulus YGY😎";
}else{
    echo "Selamat, Anda Mendapatkan Praroro😜";
}

?>