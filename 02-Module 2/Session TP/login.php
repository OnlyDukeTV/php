<?php
    session_start();

    $_SESSION["email"]="";
    $_SESSION["mdp"]="";
?>
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
<form action="./verif.php" method="post" class=" col-3 mt-5 mx-auto">
    <label for="email" class="form-label"><strong>Email :</strong></label>
    <input name="email" class="form-control">

    <label for="mdp" class="form-label"><strong>Password :</strong></label>
    <input type="password" name="mdp" class="form-control">

    <button type="submit" class="btn btn-success mt-4" >Valider</button>
    <div>
        <?php if (isset($_SESSION["error"])) { ?>
             <h1>LOGIN INCORRECT</h1>
        <?php }

        session_unset();
        session_destroy()?>

    </div>

</form>

</body>
</html>

