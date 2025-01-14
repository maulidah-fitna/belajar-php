<?php
echo "Angka Pertama : ";
$a = trim(fgets(STDIN));
echo "Angka KEdua : ";
$b = trim(fgets(STDIN));

$kali = fn() => $a*$b;

echo $kali();
?>