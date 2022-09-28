<?
$logout = $_GET['logout'];

if ($logout == "salahlu") {
    session_start();
    session_start();
    session_destroy();
?>
<!--     <script>
        alert('Nice Try..!!!\nData yang adan masukan tidak valid\nSilahkan Login ulang');
        window.location.href = './';
    </script> -->
<?
} else if ($logout == "logout") {
    session_start();
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
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