<?php 
session_start();
include 'functions.php';
$db = include 'database/start.php';

if (isset($_POST['sent']))
{

$error = array();
if (!$_POST["name"]) $error[] = "Укажите Имя!";
if (!$_POST["number"]) $error[] = "Укажите номер!";
if (!$_POST["message"]) $error[] = "Сообщение не должно быть пустым!";
if (strlen($_POST['name']) < 2 ) $error[] = "Имя должно содержать не меньше 2 символа!";
if (strlen($_POST['number']) < 10 ) $error[] = "Номер должен содержать не меньше 10 ти символа!";
if (strlen($_POST['message']) < 10 ) $error[] = "Сообщение должно содержать не меньше 10 ти символа!";

if (count($error))
{
$_SESSION['msg_error'] = implode('<br />',$error);
header('Location: index.php');
}else{ 

$db->create('posts', [
	'name' => $_POST['name'],
	'number' => $_POST['number'],
	'message' => $_POST['message'],

]);
$_SESSION['msg_success'] = "Сообщение отправленно!";
header('Location: index.php');
}
}

?>
