<?php
include "koneksi.php";

$nama = $_POST['nama'];
$phone = $_POST["phone"];
$e_mail = $_POST["e_mail"];
$password_usr = $_POST["password_usr"];




// print_r($_POST);
// die;

// $query=mysqli_query("insert into T_obat values('$kode_obat','$nama_obat',$jenis_obat','$kategori,'$haga',$jumlah')") or die('mysqli_error'());
$sql = "INSERT INTO regis_login (nama, phone, e_mail, password_usr) VALUES (
          '$nama', 
          '$phone', 
          '$e_mail', 
          '$password_usr'
          
             ) ";


if (mysqli_query($conn, $sql, $input)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("location: index.php");
function hapus($nama)
{
    global $conn;
    mysqli_query($conn, "delete FROM regis_login WHERE nama = $nama");
    return mysqli_affected_rows(($conn));
}
     // mysqli_close($conn);
