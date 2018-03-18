<?
session_start();

if (isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
        echo "ok";
}
else {
        echo "nok";
}
?>