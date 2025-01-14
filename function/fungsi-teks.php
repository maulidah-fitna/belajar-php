<?php
$file = fopen("halo.txt", "w");

$teks = "Halo \n";
fwrite($file, $teks);

$teks = "Saya Sedang Belajar PHP";
fwrite($file,$teks);

fclose($file);
?>