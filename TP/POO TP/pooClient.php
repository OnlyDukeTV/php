<?php
require_once "Personne.php";
require_once "Client.php";
require_once "Electeur.php";

$client = new Client('Pigeon', 'Adrien', "30 rue du maréchal Leclerc");
$electeur = new Electeur("Lesueur", "Antonin", "459","OUI");

echo $client-> __toString();
echo "<br>";
echo "<br>";
echo $electeur-> aVote();