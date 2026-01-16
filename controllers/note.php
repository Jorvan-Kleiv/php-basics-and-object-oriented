<?php

$config = require "config.php";
$db = new Database($config['database']);
$heading = "Notes";
$id = $_GET['id'];
$note = $db->query(
	"select * from notes where id = :id and user_id = :user",
	[
		':id' => $id,
		':user' => 2
	]
)->fetch();
if (!$note) {
	abort(Response::NOT_FOUND);
}
$currentUserId = 2;
if ($notes["user_id"] != $currentUserId) {
	abort(Response::UNAUTHORIZED);
}

require "views/note.view.php";