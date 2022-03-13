<?php
session_start();
session_unset(); // JE VIDE TOUT CE QUI EST STOCKE
session_destroy(); // DETRUIT LE TABLEAU

header("Location: login.php");
?>
