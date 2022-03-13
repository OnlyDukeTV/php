<?php
require_once "cnx.php";
$id = 4;
$film = Model::factory('Film')->findOne($id);
$film->delete();
