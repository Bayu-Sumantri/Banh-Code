<?
$sistem = $_GET['sistem'];

if ($sistem == "try") {
    session_start();
    session_start();
    session_destroy();
?>
    <script>
        alert('Nice Try..!!!\nData yang anda masukan tidak valid\nSilahkan Login ulang');
        window.location.href = './';
    </script>
<?
} else if ($keluar == "logout") {
    session_start();
    // Hapus semua variabel sesi.
    $_SESSION = array();

    // Finally, destroy the session.
    session_destroy();
?>
    <script>
        alert('Anda telah keluar..!!!\nuntuk masuk kembali\nSilahkan Login ulang');
        window.location.href = './';
    </script>
<?
}
?>