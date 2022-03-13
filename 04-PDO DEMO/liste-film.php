<?php
require_once "cnx.php";
$sql = "SELECT * FROM films";

$result = $pdo->query($sql);

// JE SOUHAITE UN TABLEAU AVEC NOM DES CHAMPS ex : year
$tab_films = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($tab_films as $film){
    echo $film["id"]." ";
    echo $film["name"]." ";
    echo $film["year"]." <br>";

}
