<?php
session_start();
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];


$user = $_SESSION["username"];
$pass = $_SESSION["password"];

if ($user == "NataDwi120" && $pass = "NataDwi120;") {
    echo "Anda berhasil login";
    echo "<br>";
    echo "Username : ". $_SESSION["username"];
    echo "<br>";
    echo "Password : ". $_SESSION["password"];
    echo "<br>";

    echo "<a href='logout.php'>Logout</a>" ;
}
else {
    echo "Maaf, username atau kata sandi anda tidak cocok";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}
?>