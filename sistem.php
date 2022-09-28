<?
$sistem = $_GET['sistem'];

if ($sistem == "salahlu") {
    session_start();
    session_destroy();
?>
    <script>
        alert('Nice Try..!!!\nData yang anda masukan tidak valid\nSilahkan Login ulang');
        window.location.href = './';
    </script>
}
<?
 else ($keluar == "logout") {
    session_start();
    session_destroy();
?>
    <script>
        alert('Anda telah keluar..!!!\nuntuk masuk kembali\nSilahkan Login ulang');
        window.location.href = './';
    </script>
<?
}
?>