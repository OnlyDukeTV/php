<?php
session_start();
// var_dump($_POST); // POUR VERIFIER SI LE TABLEAU EST LA

// ON RECUPERE LE TABLEAU
if (isset($_SESSION["tableau"])){
    $tableau = $_SESSION["tableau"];
}
else{
    $tableau=[]; // DECLARE TABLEAU VIDE
}

if (isset($_POST["nom"])){

    $personne["nom"] =$_POST["nom"];
    $personne["prenom"] =$_POST["prenom"];
    $personne["age"] =$_POST["age"];

    // AJOUTE CE TABLEAU AU TAB 2D
    $tableau[] = $personne;
    $_SESSION["tableau"] =$tableau;
   // var_dump($_SESSION["tableau"]);

}
header("Location:liste.php");