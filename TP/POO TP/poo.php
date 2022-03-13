<?php
// IL FAUT METTRE TOUTES LES CLASSES PARENTS AVEC FILLES
require_once 'ville.php';
require_once 'villeAvecRegion.php';
$ville = new villeAvecRegion('Angers','49','Maine et loire');
$ville2 = new villeAvecRegion('Nantes','44', 'Loire Atlantique');
$ville3 = new villeAvecRegion('Lyon','69','Rhones Alpes');

echo $ville->afficher();
echo "<br>";
echo "<br>";
echo $ville2->afficher();
echo "<br>";
echo "<br>";
echo $ville3->afficher();

