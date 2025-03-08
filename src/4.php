  <?php
$user = 'guest';
$pass = 'welcome';
if (!empty($_SERVER['PHP_AUTH_USER']) && !empty($_SERVER['PHP_AUTH_PW'])) {
    $checkUser = $_SERVER['PHP_AUTH_USER'];
    $checkPass = $_SERVER['PHP_AUTH_PW'];
    if ($user == $checkUser && $pass == $checkPass) {
        echo 'You have successfully logged in!';
    } else {
        header('HTTP/1.1 401 Authorization Required');
        header('WWW-Authenticate: Basic realm="My Realm"');
        die('Incorrect user/password.');
    }
}
?>