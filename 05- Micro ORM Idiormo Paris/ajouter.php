<?php
require_once "cnx.php";

$film = Model::factory('Film')->create();
$film->name = "Gladiator";
$film->year = '2000';
$film->save();
//id attribué
echo $film->id;