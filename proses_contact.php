<?php
include "koneksi.php";

$gmail = $_POST['gmail'];
$username = $_POST["username"];
$no_phone = $_POST["no_phone"];
$tanggapan = $_POST["tanggapan"];
$tanggal_buat = date('Y-m-d H:i:s');




// print_r($_POST);
// die;

// $query=mysqli_query("insert into T_obat values('$kode_obat','$nama_obat',$jenis_obat','$kategori,'$haga',$jumlah')") or die('mysqli_error'());
$sql = "INSERT INTO contact (gmail, username, no_phone, tanggapan, tanggal_buat) VALUES (
          '$gmail', 
          '$username', 
          '$no_phone', 
          '$tanggapan',
          '$tanggal_buat'
             ) ";


if (mysqli_query($conn, $sql, $input)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("location: page.php");
     // mysqli_close($conn);
