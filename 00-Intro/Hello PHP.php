<?php
echo "hello php !" . " Bonjour valérie, ";

// VARIABLE
$nom = "Max ,";
$Nom2 = "michel ,";

$x = 42;
$pi = 3.14;

// AFFICHAGE
echo  $nom ." " . $Nom2;
echo $x;

// DECLARATION TABLEAU
$tab= ["pomme","fruit","poire"];
var_dump($tab);

echo "<pre>"; // DEBUG
print_r($tab);


$tab2 = ["abricot","avocat","kaki"];

$tab2[0]="abricot";
$tab2[1]="avocat";

// CTRL + D
$tab2["un"] = "rouge";
$tab2["deux"] = "bleu";
$tab2["trois"] = "vert";

var_dump($tab2);
print_r($tab2);
?>
