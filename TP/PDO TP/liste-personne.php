<?php
require_once "cnx.php";
$sql = "SELECT * FROM personne";

$result = $pdo->query($sql);

// JE SOUHAITE UN TABLEAU AVEC NOM DES CHAMPS ex : nom
$tab_personnes = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>


<table>
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
<?php
    foreach ($tab_personnes as $personne){ ?>

    <tr>
        <td><?=$personne['prenom']?></td>
        <td><?=$personne['nom']?></td>
        <td><?=$personne['age']?></td>

        <td>
            <a href="delete.php?id=<?=$personne['id']?>" class="btn btn-danger">
                <i class="fa fa-trash"></i>
            </a>
        </td>

    </tr>
    <?php } ?>

    </tbody>
</table>
<div class="col-6">
    <form action="ajouter.php" method="post">
        <h2>Ajouter</h2>
        <input name="prenom" class="form-control my-4" placeholder="Prénom" required>
        <input name="nom" class="form-control my-4" placeholder="Nom" required>
        <input name="age" class="form-control my-4" placeholder="Age" required>
        <button class="btn btn-success mb-4" type="submit">
            <i class="fa fa-plus"></i>
        </button>
    </form>
</div>

</body>
</html>
