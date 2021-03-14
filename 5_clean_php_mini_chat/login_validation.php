<?php
session_start();
include('db.php');

if (isset($_POST['login']))
	{
	$query=$db->query("SELECT email FROM users WHERE email='$_POST[email]'");

	$result=$query->rowCount();
	if ($result !=1) {

	$error[] = "Вы ввели не верно E-mail!";

	}else
	{
	$_SESSION['auth'] = true;
	$_SESSION['username'] = $_POST["email"];

	$_SESSION['msg_success'] = "Вы авторизированны!";
	header('location:index.php');

	
	}

	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $error[] = "Укажите правильно E-mail!";
	if (!$_POST["password"]) $error[] = "Укажите пароль!";
	if (!$_POST["email"]) $error[] = "Укажите E-mail!";


	if (count($error))
	{
	$_SESSION['msg_error'] = implode('<br />',$error);
	header("Location: login.php");
	}   
}

/*
if (isset($_POST['login']))
	{
	if (!$_POST["password"]) $error[] = "Укажите пароль!";

	$query=$db->query("SELECT password FROM users WHERE password='".$_POST["password"]."'");

	$result=$query->rowCount();
	if ($result > 0) {

	$error[] = "Вы ввели не верно пароль!";
	}else{

	$_SESSION['message'] = "Вы авторизированны!";
	$_SESSION['msg_type'] = "success!";	
	header('location:index.php');
	}

	if (count($error))
	{
	$_SESSION['message'] = implode('<br />',$error);
	header("Location: login.php");
	}   
}
*/

//remember me/email
if (!empty($_POST["remember"]))
	{
	setcookie("emailuser",$_POST["email"],
	time()+(3000*1));
	}
	else
	{
	if(isset($_cookie["emailuser"]))
	{
	setcookie("emailuser","");
	}
}

//remember me/password
if (!empty($_POST["remember"]))
	{

	setcookie("passworduser",$_POST["password"],
	time()+(3000*1));	
	}
	else
	{
	if(isset($_cookie["passworduser"]))
	{
	setcookie("passworduser","");
	}
}

?>