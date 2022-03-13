<?php
    session_start();

    // SI IL Y A DONNEE EN SESSION
    $email ="Undefined";
    if (isset($_SESSION["email"]))
{
    $email = $_SESSION["email"];
}

?>

<h1><?=$email ?></h1>
<a href="page1.php">Page 1</a>
<br>
<a href="logout.php">Deconnexion</a>
