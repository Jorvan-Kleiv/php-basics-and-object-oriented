<?php

$books = [
	[
		"title" => "PHP for beginners",
		"author" => "James Larovski",
		"releaseDate" => 1995,
		"purchaseUrl" => "https://github.com/James/php-engine",
	],
	[
		"title" => "Clean code",
		"author" => "Sarah Smith",
		"releaseDate" => 2000,
		"purchaseUrl" => "https://github.com/SarahSmith/clean-code",
	],
	[
		"title" => "Spacing principles in ui design",
		"author" => "Adrian samosa",
		"releaseDate" => 2012,
		"purchaseUrl" => "https://github.com/Adrians/Spacing-principles",
	]

];

$filteredBooks = array_filter($books, function ($book) {
	return $book["releaseDate"] < 2012;
});

require "index.view.php";