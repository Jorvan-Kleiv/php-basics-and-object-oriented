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
)->find();

$currentUserId = 2;
authorize($notes["user_id"] != $currentUserId);

require "views/note.view.php";