<?php
// Array 2 Dimensi
$siswa=[
    "nama"=>"Maulidah Fitri Faricha",
    "kelas"=>11,
    "alamat"=>[
        "desa"=>"Sidorejo",
        "kec"=>"Wungu",
        "kab"=>"Madiun"]
];

echo "Nama \t: ".$siswa["nama"].PHP_EOL;
echo "Kelas \t: ".$siswa["kelas"].PHP_EOL;
echo "Alamat \t: ".PHP_EOL;
echo "\tDesa \t\t: ".$siswa["alamat"]["desa"].PHP_EOL;
echo "\tKecamatan \t: ".$siswa["alamat"]["kec"].PHP_EOL;
echo "\tKabupaten \t: ".$siswa["alamat"]["kab"].PHP_EOL;

?>