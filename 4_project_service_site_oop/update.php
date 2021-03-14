<?php 

include 'functions.php';
$db = include 'database/start.php';


$db->update('address', [	
	'city' => $_POST['city'],
	'street' => $_POST['street'],
	'bc' => $_POST['bc'],
	'cab' => $_POST['cab'],	
], $_GET['id']);


header('Location: edit.php');

?>