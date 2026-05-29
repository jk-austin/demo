<?php


/*$config = require __DIR__ . "/../config.php";
$db = new Database($config["database"]);
*/

$heading = "Note";

// $id = $_GET["id"];

$note = $db->query("select * from notes where id = :id", ["id" => $_GET["id"]])->fetch();

require __DIR__ . "/../views/note.view.php";

