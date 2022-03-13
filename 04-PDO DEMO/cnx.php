<?php
define("HOST" , "localhost"); // URL OU SE TROUVE LE SERVER MYSQL
define("LOGIN", "root");
define("PSW", "");
define("DATABASE", "angers_films");

try {
    $dataBase= "mysql:host=".HOST.";dbname=".DATABASE.";charset=utf8";

    // CREATION DE OBJET PDO
    $pdo = new PDO($dataBase,LOGIN,PSW);
    // AFFICHER LES ERREURS
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $exception){
    echo "Probleme connexion :".$exception->getMessage();
}