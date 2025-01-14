<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

if($user == "admin" and $pass == "Nd4kt4hu"){
    echo "Anda Berhasil Login";
    echo "<br>";
    echo "Username : ".$user;
    echo "<br>";
    echo "Password : ".$pass;
    echo "<br>";
    
    echo "<a href='logout.php'>Logout</a>";
}else{
    echo "Maaf, Anda Bukan Orang Kami";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}
?>