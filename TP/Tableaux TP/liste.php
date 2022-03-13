<?php
session_start();
// si le tableau est declaré en session
if (isset($_SESSION["tableau"])){
    $tableau = $_SESSION["tableau"];
}
else{
    $tableau =[]; // je declare un tableau vide
}
/*
$tableau = [
    0 => [
        "prenom"=>"John",
        "nom"=>"DOE",
        "age"=>18,
    ],
    1 => [
        "prenom"=>"Jane",
        "nom"=>"DOE",
        "age"=>18,
    ],
    2 => [
        "prenom"=>"Bruce",
        "nom"=>"WILLIS",
        "age"=>64,
    ],

];
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soirée Cocktail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">
            <i class="fa-solid fa-martini-glass-citrus"></i>
            Soirée Cocktail</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
            </ul> -->
        </div>
    </div>
</nav>
<div class="container">

    <div class="row">
        <div class="col-6">
            <h1>Liste des personnes</h1>
            <!-- table.table>thead>tr>th*3 -->
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Indice</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
                </thead>
                <!-- tbody>tr>td*3 -->
                <tbody>
                <?php foreach ($tableau as $indice => $personne) { ?>
                    <tr>

                        <td><?=$indice?></td>
                        <td><?=$personne['prenom']?></td>
                        <td><?=$personne['nom']?></td>
                        <td><?=$personne['age']?></td>

                        <td>
                            <a href="effacer.php?indice=<?=$indice?>" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
            <!-- table.table>thead>tr>th*3^^tbody>tr*3>td*3 -->
        </div>
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
    </div>
</div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy;Soirée</p></div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>