<?php
$hari = date("w");

switch($hari){
    case 0:
        echo "Hari Ahad";
        Break;
    case 1:
        echo "Hari Senin";
        break;
    case 2:
        echo "Hari Selasa";
        break;
    case 3:
        echo "Hari Rabu";
        break;
    case 4:
        echo "Hari Kamis";
        break;
    case 5:
        echo "Hari Jum'at";
        break;
    case 6:
        echo "Hari Sabtu";
        break;
}
?>