<?php 

$db = include  __DIR__ . '/../database/start.php';
$posts = $db->getAll('posts');
include  __DIR__ . '/../index.view.php';


// BROWSER -> /homepage -> index.php - это FRONT CONTROLLER
// 							->Router
//								->/homepage => '/controllers/homepage.php'
// 																	-> QueryBuilder->all()
//																	-> return include VIEW
