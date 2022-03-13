<?php
require_once "cnx.php";
$film = "SAW";
$year = "2002";
// SURTOUT 0NE PAS FAIRE : INJECTION SQL
// $sql = "INSERT INTO films VALUES (NULL".$film." ".$year." )";

$prepared_sql = "INSERT INTO films VALUES (NULL ,:film,:year)";

// ON PROPOSE LA PREPARED_SQL A PDO
$prepared_statement = $pdo->prepare($prepared_sql);

// ON VIENT BINDER LES PARAMETRES

$prepared_statement->bindParam(":film",$film,PDO::PARAM_STR);
$prepared_statement->bindParam(":year",$year,PDO::PARAM_INT);

// ON EXECUTE
$prepared_statement->execute();

