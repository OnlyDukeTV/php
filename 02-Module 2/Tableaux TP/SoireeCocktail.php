<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soirée Cocktail</title>
</head>
<body>

<table class="table table-striped">
    <thead>
    <tr>
        <th>NOM</th>
        <th>AGE</th>

    </tr>
    </thead>
    <!-- tbody>tr>td*3 -->
    <tbody>

    <?php
    $personnes = [];

    if (isset($_GET["nom"]) & isset($_GET["age"])) {
        $personnes = $_GET["nom"]["age"];
        $personne = $_GET["nom"]["age"];


    foreach ($personnes as $personne) {

        ?>
        <tr>

            <td>
                <?= $personne["nom"] ?>
            </td>
            <td>
                <?= $personne["age"] ?>
            </td>

        </tr>
    <?php } }?>
    </tbody>
</table>

</body>
</html>
