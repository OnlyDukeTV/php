<?php
// 1ERE FACON DE FAIRE
$tableau =[];
$tab2["name"]="The Matrix";
$tab2["year"]="1999";

$tableau[] = $tab2;

$tab3["year"]="Star Wars";
$tab3["year"]="1977";

$tableau[] = $tab3;

// var_dump($tableau);
// echo '<pre>';
// print_r($tableau);

// 2EME FACON DE FAIRE
$films[0]["name"]= "The Matrix";
$films[0]["year"]= "1999";
$films[1]["name"]= "Star Wars";
$films[1]["year"]= "1977";

// 3EME FACON DE FAIRE
$film = [
    0 => [
        "name" => "The Matrix",
        "year" => "1999",
],
    1 => [
        "name" => "Star Wars",
        "year" => "1977",
    ]
];

$fruits = [
    0 => "pomme",
    1 => "poire",
    2 => "cerise",
];


echo '<pre>';
print_r($films);
print_r($film);
print_r($fruits);
?>
<!-- *************************** -->
<ul>
    <?php
    foreach ($films as $key=> $film){
        ?>

    <li> <?=$key?> <?=$film["year"]?> - <?=$film["name"]?> </li>
    <?php } ?>
</ul>

<ul>
    <?php
        foreach ($films as $film){

        }
    ?>
</ul>
<ul>
        <?php
        foreach($films as  $film){
            ?>
            <li><?=$film["year"]?> - <?=$film["name"]?></li>
        <?php } ?>
        </ul>