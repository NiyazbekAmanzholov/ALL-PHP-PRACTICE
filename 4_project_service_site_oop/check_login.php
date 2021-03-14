<?php
session_start();

$db = new PDO("mysql:host=localhost; dbname=elevator", admin, 930421351136);

if (isset($_POST['enter']))
	{
	$query=$db->query("SELECT login,password FROM login WHERE login='$_POST[login]' AND password='$_POST[password]'");

	$result=$query->rowCount();
	if ($result ==1) {

	$_SESSION[msg_success] = "Вы авторизированны!";
	header('location:edit.php');
	}else
	{
	$error[] = "Вы ввели не верно login или пароль!";
	}

	if (!$_POST[login]) $error[] = "Укажите login!";
	if (!$_POST[password]) $error[] = "Укажите пароль!";	

	if (count($error))
	{
	$_SESSION[msg_error] = implode('<br />',$error);
	header("Location: avtorization.php");
	}   
}