<?php
// Foreach array asosiatif
$siswa = [
    "siswa1" => [
        "nama" => "Najma",
        "kelas" => 11
    ],
    "siswa2" => [
        "nama" => "Faricha",
        "kelas" => "10"
    ]
];

foreach($siswa as $murid => $san3){
    echo strtoupper($murid).PHP_EOL;
    foreach($san3 as $dd => $isi){
        echo ucwords($dd)." : ".$isi.PHP_EOL;
    }
}
?>