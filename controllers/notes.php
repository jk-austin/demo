<?php


$config = require __DIR__ . "/../config.php";
$db = new Database($config["database"]);


$heading = "Notes";

$notes = $db->query("select * from notes where user_id = 2")->fetchAll();

require __DIR__ . "/../views/notes.view.php";

