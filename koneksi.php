<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "regis_login";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "";
//mysqli_close($conn);