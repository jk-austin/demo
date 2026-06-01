<?php


/*$config = require __DIR__ . "/../config.php";
$db = new Database($config["database"]);
*/

$heading = "Note";

$note = $db->query("select * from notes where id = :id", [
    "id" => $_GET["id"]

])->findOrFail();

$currentUserId = 2;

authorize($note["user_id"] == $currentUserId);

if ($note["user_id"] != $currentUserId) {
    abort(Response::FORBIDDEN);
}

require __DIR__ . "/../views/note.view.php";
