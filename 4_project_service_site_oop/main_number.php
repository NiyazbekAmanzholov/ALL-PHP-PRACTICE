<?php 
session_start();
include 'functions.php';
$db = include 'database/start.php';

$db->update('main_number', [	
	'number' => $_POST['number'],
], $_GET['id']);

header('Location: edit.php');

?>