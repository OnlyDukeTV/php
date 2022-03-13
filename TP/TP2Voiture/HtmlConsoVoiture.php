<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consommation Voiture</title>
</head>
<body>
<div class="container">

    <div class="text-center mt-4">
    <h1>CALCUL CONSOMMATION ESSENCE</h1>
    </div>

<div class="col-3 mt-4 mx-auto ">

<form action="./ConsoVoiture.php" method="post">
    <label for="km" class="form-label"><strong>Kilometres :</strong></label>
    <input name="km" class="form-control">

    <label for="L" class="form-label"><strong>Litres Essences :</strong></label>
    <input name="L" class="form-control">

    <button type="submit" class="btn btn-success mt-4" >Calcul</button>

    <?php
    if (isset($_GET["conso"])){
        $conso = $_GET["conso"];
    }
    ?>

</form>
</div>

<div class="text-center mt-4">

    <h3>Votre Consommation d'essence est de <?=$conso ?>L/100</h3>
    <br>
    <p>
        Depuis maintenant plus de 30ans, les véhicules qui parcourent nos routes gagnent en puissance,
        en confort de conduite avec de plus en plus d’équipement, tout en essayant de baisser la consommation de carburant,
        que ce soit un véhicule diesel ou essence.
        <br><br>
        Nous allons voir si les différents constructeurs ont réussi le parient d'une consommation toujours en baisse !
        <br><br>
        Il y a 30ans (1990), les voitures essences consommées en moyenne 8,68 litres aux 100 km,
        en 2019 la consommation moyenne d'essence était de 7,31 litres aux 100 km. Pour les véhicules diesel,
        la consommation était de 6,73 litres aux 100 km, aujourd’hui elle est de 6,071/100.
        <br><br>
        Si l'on doit faire un bilan rapide de ce que l’on constate,
        les véhicules essence ont en moyenne diminué leur consommation de 1,37 litre,
        pour les voitures diesels la diminution est de 0,66 litre.
        <br><br>
        On constate donc que les constructeurs automobiles ont réussi (en partie) à faire baisser en consommation
        les voitures aux files des années même si cela n’est pas aussi important qu’ils peuvent parfois le prétendre.
        Cela peut aussi s’expliquer par le fait que les véhicules soient plus lourds
        dus aux équipements plus conséquents et d’une plus grande puissance. </p>

</div>
    <img src="">

</div>
</body>
</html>






