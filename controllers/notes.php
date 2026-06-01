<?php


/*$config = require __DIR__ . "/../config.php";
$db = new Database($config["database"]);
*/

$heading = "My Notes";

$notes = $db->query("select * from notes where user_id = ?", [2])->findAll();

require __DIR__ . "/../views/notes.view.php";

