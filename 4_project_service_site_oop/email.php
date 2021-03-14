<?php 

include 'functions.php';
$db = include 'database/start.php';

$db->update('email', [	
	'email' => $_POST['email'],
], $_GET['id']);


header('Location: edit.php');

?>