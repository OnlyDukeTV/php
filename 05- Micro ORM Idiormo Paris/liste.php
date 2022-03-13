<?php
require_once 'cnx.php';
//Film c'est la class
$films = Model::factory('Film')->findMany();
foreach($films as $film) {
    echo $film->name." ".$film->year."<br>";
}