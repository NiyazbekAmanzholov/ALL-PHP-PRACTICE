<?php 

include 'functions.php';
$db = include 'database/start.php';

$db->update('all_numbers', [	
	'number' => $_POST['number1'],
], $_GET['id']);


header('Location: edit.php');

?>