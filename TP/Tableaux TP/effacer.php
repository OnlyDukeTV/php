<?php
session_start();
if (isset($_GET["indice"]))
{
    $indice = $_GET["indice"];
    unset($_SESSION["tableau"][$indice]);
}
header("Location:liste.php");
