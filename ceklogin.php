<?php
include "koneksi.php";


$sql = "SELECT * FROM regis_login where e_mail='$_POST[e_mail]' and password_usr='$_POST[password_usr]'";
$table_login = mysqli_query($conn, $sql);
//echo"$sql<br>";              
$row = mysqli_fetch_assoc($table_login);
$id_client = $row["id_client"];
$e_mail = $row["e_mail"];
$nama = $row["nama"];
$password_usr = $row["password_usr"];


// print_r($row);
// die;

if ($e_mail == "$_POST[e_mail]" and $password_usr == "$_POST[password_usr]") {
  session_start();
  $_SESSION["nama"]     = "$nama";
  $_SESSION["password_usr"]     = "$password_usr";
  $_SESSION["id_client"]     = "$id_client";
  $_SESSION["e_mail"]   = "$e_mail";
  //print_r($_SESSION);
  echo "<script>window.location='page.php?act=Banh Code'</script>";
} else {
  header("location: sistem.php");
}
