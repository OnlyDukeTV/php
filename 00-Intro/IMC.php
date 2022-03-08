<?php
// CALCUL IMC
// imc = poids /(taille*taille)
// poids en kg
// taille en m
//Si imc < 18.5 maigreur
//Si  18.5 <imc < 25 normale
//Si  imc > 25 surpoids

// DECLARATION VARIABLE
if (isset($_POST["poids"]) && isset($_POST["taille"])){
    $poids = $_POST["poids"];
    $taille = $_POST["taille"];

    // CALCUL DE IMC
    $calcul = $poids / ($taille * $taille);

    // SET UP RESULTAT
    $result = "";

    if ($calcul < 18.5){
        $result = "Maigreur";
        $class ="alert-danger";
        $objectif = $taille * $taille * 18.5;
        $objectif = round($objectif,2)." kg";
    }

    else if ($calcul > 18.5 && $calcul <= 25){
        $result = "Normal";
        $class ="alert-success";
        $objectif = "pas d'objectif !";
    }

    else if ( $calcul > 25){
        $result = "Surpoids";
        $class ="alert-danger";
        $objectif = $taille * $taille * 25;
        $objectif = round($objectif,2)." kg";
    }

    // CALCUL POIDS IDEAL
    $poidsIdeal = $poids - (25 * $taille * $taille);
} ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
<h1>Calcul IMC</h1>


<!-- Renvoi sur la page Demo1 -->
    <div class="col-4">
<form action="IMC.php" method="post">
    <label for="poids" class="form-label">Poids :</label>
    <input name="poids" id="poids" class="form-control">



    <label for="taille" class="form-label">Taille :</label>
    <input name="taille" id="taille" class="form-control">



    <button type="submit" class="btn btn-primary mt-3"> Calcul </button>
</form>
    </div>

<!-- AFFICHAGE -->
    <div class="alert <?=$class ?> mt-4 col-6" role="alert">

        <h1>Votre Imc :<?= round($calcul,1) ?></h1>
        <h2> <?= $result ?> </h2>
        <h3>Objectif poids :<?=$objectif ?> </h3>




</div>
</body>
</html>
