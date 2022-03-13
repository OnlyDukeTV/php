<?php
if (isset($_GET["id"])){

require_once "cnx.php";

    $id = $_GET["id"];

    $prepared_sql = "DELETE FROM personne WHERE id = :id";

// ON PROPOSE LA PREPARED_SQL A PDO
    $prepared_statement = $pdo->prepare($prepared_sql);

// ON VIENT BINDER LES PARAMETRES

    $prepared_statement->bindParam(":id",$id,PDO::PARAM_INT);


// ON EXECUTE
    $prepared_statement->execute();


}
header("Location:liste-personne.php");
