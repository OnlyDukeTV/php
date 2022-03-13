<?php
require_once "cnx.php";
if (isset($_GET["id"])){
    $id = $_GET["id"];

    $prepared_sql = "DELETE FROM films WHERE id = :id";

// ON PROPOSE LA PREPARED_SQL A PDO
    $prepared_statement = $pdo->prepare($prepared_sql);

// ON VIENT BINDER LES PARAMETRES

    $prepared_statement->bindParam(":id",$id,PDO::PARAM_INT);


// ON EXECUTE
    $prepared_statement->execute();
}
