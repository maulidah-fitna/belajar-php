<?php
session_start();

$_SESSION["username"] = "Joko";
$_SESSION["password"] = "rahasia";

echo "Berhasil Membuat Session";
echo "<br>";

echo "<a href=cek-session.php>Cek Session</a>";

?>