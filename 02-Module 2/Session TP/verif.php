<?php
session_start();

$emailAdmin = "michel@gmail.com";
$mdpAdmin = "123";
$error = "Incorrect";

if (isset($_POST["email"]) & isset($_POST["mdp"])) {
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
}

if ($mdp == $mdpAdmin & $email == $emailAdmin) {
    header("Location:home.php");
} else {
    $_SESSION["error"] = 'coucou';
    header("Location:login.php");
    }
       
    
  


