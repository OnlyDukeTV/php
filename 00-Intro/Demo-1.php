<?php
// RECUPER LA VALEUR $nom
// var_dump($_POST);
// SI LE FORM EST ENVOYE isset()
if (isset($_POST["mot"])){
    $mot = $_POST["mot"];
   // echo $mot. "<br><br>";
    $mot = strtoupper($mot);
}

?>

<!-- for est relié a l'id -->
<label for="mot">
    Mot :
</label>

<!-- Renvoi sur la page Demo1 -->
<form action="Demo-1.php" method="post">
<input name="mot" id="mot">

<button type="submit"> Affiche </button>
</form>
<h1><?=$mot ?></h1>