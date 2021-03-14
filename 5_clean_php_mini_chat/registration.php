<?php 
session_start();
include('db.php');

if (isset($_POST['register']))
	{

	$error = array();

	$query=$db->query("SELECT email FROM users WHERE email='".$_POST["email"]."'");

	$result=$query->rowCount();

	if ($result > 0) $error[] = "email занят!";//если есть адинаковый email, выводим ошибку

	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $error[] = "Укажите правильно E-mail!";

	if (!$_POST["password"]) $error[] = "Укажите пароль!";
	if (!$_POST["name"]) $error[] = "Укажите имя!";
	if (!$_POST["email"]) $error[] = "Укажите E-mail!";

	if (strlen($_POST['password']) < 6 ) $error[] = "Пароль должен содержать не меньше 6 символа!";

	if ($_POST["password"] != $_POST["password_confirmation"]) $error[] = "Пароли не соответствуют!";

	if (count($error))
	{
	$_SESSION['msg_error'] = implode('<br />',$error);
	header("Location: register.php");
	}else{   
	$password = $_POST["password"];
	$password = password_hash($password, PASSWORD_DEFAULT);

	$db->query("INSERT INTO users (name, email, password) VALUES ('".$_POST["name"]."' , '".$_POST["email"]."', '$password')");

	$_SESSION['msg_success'] = "Вы зарегистрированны!";
	header("Location: login.php");	
	}       
}
?>







