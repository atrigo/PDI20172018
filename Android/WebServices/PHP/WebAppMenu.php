<?php
if (!$_SESSION["username"]) {
        echo '<br><a href="WebApp.php">Login</a>|<a href="WebAppTelemovelListar.php">Listar Telemoveis</a><br>';
} 
else {
        echo '<br><a href="WebAppClienteDados.php">'.$_SESSION["username"].'</a> <a href="WebAppLogout.php"> (Logout)</a>|<a href="WebAppTelemovelListar.php">Listar Telemoveis</a><br>';
}
?>