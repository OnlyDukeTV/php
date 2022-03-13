<?php

if (isset($_POST["km"]) & isset($_POST["L"]))
    $km = $_POST["km"];
    $L = $_POST["L"];

    $conso = ($L*100)/$km;

   header("Location:./HtmlConsoVoiture.php?conso=".$conso); // METHODE GET
    echo $km;
    echo $L;
    echo $conso;

   ?>

