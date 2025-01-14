<?php
function sapa($nama, $daerah){
    echo "Hai, $nama dari $daerah!";
}

echo "Masukkan Nama Anda : ";
$nama = trim(fgets(STDIN));
echo "Masukkan Asal Anda : ";
$daerah = trim(fgets(STDIN));


sapa($nama, $daearah);
?>