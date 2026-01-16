<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route = [
	"/" => "controllers/index.php",
	"/about" => "controllers/about.php",
	"/contact" => "controllers/contact.php",
];

/**
 * @return void
 */

function routeToController($uri, $route)
{
	if (array_key_exists($uri, $route)) {
		require $route[$uri];
	}
	else {
		abort(404);
	}
}
function abort($code)
{
	http_response_code(404);
	require "views/{$code}.php";
	die();
}

routeToController($uri, $route);