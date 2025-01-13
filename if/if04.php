<?php
echo "Masukkan Nama Anda \t: ";
$nama = trim(fgets(STDIN));
echo "Masukkan Nilai Anda \t: ";
$nilai = trim(fgets(STDIN));

if ($nilai<=0) {
    echo "Maaf, $nama, Anda belum Mengikuti Ujian";
}else if ($nilai<60) {
    echo "Nilai \t: $nilai".PHP_EOL;
    echo "Nama \t: $nama";
    echo "Grade \t: E";
}else if ($nilai<70) {
    echo "Nama \t: $nama";
    echo "Nilai \t: $nilai".PHP_EOL;
    echo "Grade \t: D";
}else if ($nilai<80) {
    echo "Nama \t: $nama";
    echo "Nilai \t: $nilai".PHP_EOL;
    echo "Grade \t: C";
}else if ($nilai<90) {
    echo "Nama \t: $nama";
    echo "Nilai \t: $nilai".PHP_EOL;
    echo "Grade \t: B";
}else if ($nilai<=100) {
    echo "Nama \t: $nama";
    echo "Nilai \t: $nilai".PHP_EOL;
    echo "Grade \t: A";
}else{
    echo "Maaf, Nilai Tidak Valid :(";
}
?>