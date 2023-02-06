<?php
include "../koneksi.php";
$sql = "SELECT * FROM admin where gmail='$_POST[gmail]' and password_adm='$_POST[password_adm]'";
$table_login = mysqli_query($conn, $sql);
//echo"$sql<br>";              
$row = mysqli_fetch_assoc($table_login);
$id = $row["id"];
$username = $row["username"];
$gmail = $row["gmail"];
$password_adm = $row["password_adm"];


// print_r($row);
// die;

if ($gmail == "$_POST[gmail]" and $password_adm == "$_POST[password_adm]") {
  session_start();
  $_SESSION["id"]     = "$id";
  $_SESSION["username"]     = "$username";
  $_SESSION["gmail"]   = "$gmail";
  $_SESSION["password_adm"]     = "$password_adm";
  //print_r($_SESSION);
  echo "<script>window.location='admin.php?act=Banh Code'</script>";
} else {
  header("location: sistem_adm.php");
}
