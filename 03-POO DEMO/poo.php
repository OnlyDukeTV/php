<?php
// include , include_once , require
//require_once 'Personne.class.php';
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.class.php';
    echo $class_name."<br>";
});
$personne = new Personne('Johnnny','CASH',18);
$personne4 = new Personne('Johnnny','Halliday',75);
var_dump($personne);
//print_r($personne);
//$p = new personne();
$personne2 = new stdClass();
$personne2->nom = 'DUPONT';
$personne2->prenom = 'Jean';
var_dump($personne2);

$tab["prenom"] ="WILLIS";
$tab ["nom"] = "Bruce";
$personne3 = (Object) $tab;
var_dump($personne3);

echo $personne3->nom;
echo "<br>";
echo $personne->getFullName();

// afficher i de $personne
//2
//Personne->i
//$personne->i
//echo Personne::i;
echo "<br>";
echo Personne::$i;
echo "<br>";
echo $personne::$i;
echo "<br>";
echo $personne4::$i;
// afficher i de $personne4
//2