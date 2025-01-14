<?php
session_start();

echo "Username : ".$_SESSION["username"];

echo "<br>";

echo "Password : ".$_SESSION["password"];
?>

<!-- php -S localhost:80 -->

<!-- Kalau browser nya ditutup, nanti variabel nya hilang -->


