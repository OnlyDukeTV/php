<?php
    session_start(); // TOUJOURS EN HAUT AVEC RIEN AVANT

    $_SESSION["email"]="toto@toto.com";
    $_SESSION["role"]="admin";

?>
<h1>Je stocke en session</h1>
<a href="page2.php">Page 2</a>
