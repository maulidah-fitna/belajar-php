<?php
echo "Masukkan Nilai Awal \t: ";
$awal = trim(fgets(STDIN));

echo "Masukkan Nilai Akhir \t: ";
$akhir = trim(fgets(STDIN));

// Untuk hitungan maju
for($awal; $awal<=$akhir; $awal++){
    echo "Antrian Ke-$awal \n";
}

// Untuk hitungan mundur
// for($awal; $awal>=$akhir; $awal--){
//     echo "Antrian Ke-$awal \n";
// }
?>