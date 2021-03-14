<?php 
include __DIR__ . '/../functions.php';


$routes = [
	"/" => 'functions/homepage.php',
	"/about" => 'functions/about.php',
	"/edit/{id}" => 'functions/edit.php'//Не могу понять как написать правильно маршрут с применением id для редактирования и удаления				
];



$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes))
{
	include __DIR__ . '/../' . $routes[$route]; exit;
} else {
	dd(404);
}



?>
