<?php
include "koneksi.php";

$payment = $_POST['payment'];
$nama = $_POST["nama"];
$card_number = $_POST["card_number"];
$Gmail = $_POST["Gmail"];
$valid_thru = $_POST["valid_thru"];
$cw_cv = $_POST["cw/cv"];
$tanggal_buat = date('Y-m-d H:i:s');




// print_r($_POST);
// die;

// $query=mysqli_query("insert into T_obat values('$kode_obat','$nama_obat',$jenis_obat','$kategori,'$haga',$jumlah')") or die('mysqli_error'());
$sql = "INSERT INTO pembayaran (payment, nama, card_number, Gmail, valid_thru, cw_cv, tanggal_buat) VALUES (
          '$payment', 
          '$nama', 
          '$card_number', 
          '$Gmail',
          '$valid_thru', 
          '$cw_cv',
          '$tanggal_buat'
             ) ";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("location: transaction_berhasil.html");
     // mysqli_close($conn);