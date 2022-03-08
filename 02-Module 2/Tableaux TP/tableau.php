<?php

$personnes = [
    0 => [
        "nom" => "Donald Trump",
        "age" => "75",
    ],
    1 => [
        "nom" => "Karim Benzema",
        "age" => "35",
    ],
    2 => [
        "nom" => "Edouard",
        "age" => "27",
    ],
    3 => [
        "nom" => "Kim jung hun",
        "age" => "44",
    ],
    4 => [
        "nom" => "Louis XVI",
        "age" => "516",
    ]
];

$personne[0]["nom"]= "Donald Trump";
$personne[0]["age"]= "75";

$personne[1]["nom"]= "Karim Benzema";
$personne[1]["age"]= "35";

$personne[2]["nom"]= "Edouard";
$personne[2]["age"]= "27";

$personne[3]["nom"]= "Kim jung hun";
$personne[3]["age"]= "44";

$personne[4]["nom"]= "Louis XVI";
$personne[4]["age"]= "516";


echo '<pre>';
print_r($personnes);
print_r($personne);

if (isset($_POST["nom"]) & isset($_POST["age"])){
    $personnes = $_POST["nom"]["age"];
    $personne = $_POST["nom"]["age"];

    header("Location:SoireeCocktail.php");
}
?>
