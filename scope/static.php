<?php
function antrian(){
    static $antrian = 5;
    echo $antrian.PHP_EOL;
    $antrian++;
}

antrian();
antrian();
antrian();
antrian();
?>