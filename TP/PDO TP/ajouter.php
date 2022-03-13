<?php
if (isset($_POST["nom"])){


require_once "cnx.php";
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$age = $_POST["age"];

// SURTOUT 0NE PAS FAIRE : INJECTION SQL
// $sql = "INSERT INTO films VALUES (NULL".$film." ".$year." )";

$prepared_sql = "INSERT INTO personne VALUES (NULL ,:nom ,:prenom ,:age)";

// ON PROPOSE LA PREPARED_SQL A PDO
$prepared_statement = $pdo->prepare($prepared_sql);

// ON VIENT BINDER LES PARAMETRES

$prepared_statement->bindParam(":nom",$nom,PDO::PARAM_STR);
$prepared_statement->bindParam("prenom", $prenom,  PDO::PARAM_STR);
$prepared_statement->bindParam(":age",$age,PDO::PARAM_INT);

// ON EXECUTE
$prepared_statement->execute();



}
header("Location:liste-personne.php");

