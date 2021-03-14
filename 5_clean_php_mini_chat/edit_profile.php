<?php 
session_start();
include('db.php');
//Регистрация

if (isset($_POST['edit_profile']))
	{

	$error = array();

	//закачиваем файлы в папку
	$name = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	move_uploaded_file($tmp_name, "img/" . $name);


	$query=$db->query("SELECT email FROM users WHERE email='$_POST[email]'");

	$result=$query->rowCount();

	if ($result > 0) $error[] = "email занят!";//если есть адинаковый email, выводим ошибку

	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $error[] = "Укажите правильно E-mail!";

	if (!$_POST["name"]) $error[] = "Укажите имя!";
	if (!$_POST["email"]) $error[] = "Укажите E-mail!";

	if (count($error))
	{
	$_SESSION['msg_error'] = implode('<br />',$error);
	header("Location: index.php");
	}else{   

	$db->query("UPDATE users SET name='$_POST[name]',email='$_POST[email]',img='$name' WHERE id='$_POST[id]'");

	$_SESSION['msg_success'] = "Данные успешно обновленны!";
	session_unset();
	header("Location: index.php"); 	
	}   
}


//Пароль/обновляем записи в profile.php
/*
if (isset($_POST['edit_password'])){

	if (!$_POST["password"]) $error[] = "Укажите пароль!";

	if (!$_POST["password"]) $error[] = "Укажите подтверждающий пароль!";

	if (strlen($_POST['password']) < 6 ) $error[] = "Пароль должен содержать не меньше 6 символа!";

	if (strlen($_POST['password']) < 6 ) $error[] = "Подтверждающий пароль должен содержать не меньше 6 символа!";

	if ($_POST["password"] != $_POST["password_confirmation"]) $error[] = "Пароли не соответствуют!";	

	if (count($error))
	{
	$_SESSION['message2'] = implode('<br />',$error);
	header("Location: index.php");
	}else{ 

	$query=$db->query("SELECT password FROM users WHERE password='$_POST[current]'");

	$result=$query->rowCount();
	if ($result !=1){

	$_SESSION['message2'] = "Текущий пароль не действителен!";
	$_SESSION['msg_type'] = "success!";
	header("Location: index.php");	
	}
	else
	{

	$password = $_POST["password"];
	$password = password_hash($password, PASSWORD_DEFAULT);

	$db->query("UPDATE users SET password='$password' WHERE id='$_POST[id]'");	

	$_SESSION['message'] = "Пароль обнавлен!";
	$_SESSION['msg_type'] = "success!";

	header("Location: index.php");
}

} 
}
*/


if (isset($_POST['edit_password'])){

	if (!$_POST["password"]) $error[] = "Укажите пароль!";

	if (!$_POST["password"]) $error[] = "Укажите подтверждающий пароль!";

	if (strlen($_POST['password']) < 6 ) $error[] = "Пароль должен содержать не меньше 6 символа!";

	if (strlen($_POST['password']) < 6 ) $error[] = "Подтверждающий пароль должен содержать не меньше 6 символа!";

	if ($_POST["password"] != $_POST["password_confirmation"]) $error[] = "Пароли не соответствуют!";	

	if (count($error))
	{
	$_SESSION['msg_error'] = implode('<br />',$error);
	header("Location: index.php");
	}else{ 

	$query=$db->query("SELECT password FROM users WHERE password='$_POST[current]'");

	$result=$query->rowCount();
	if ($result > 0){

	$password = $_POST["password"];
	$password = password_hash($password, PASSWORD_DEFAULT);

	$db->query("UPDATE users SET password='$password' WHERE id='$_POST[id]'");	

	$_SESSION['msg_success'] = "Пароль обнавлен!";

	header("Location: index.php");

	}
	else
	{

	$_SESSION['msg_success'] = "Текущий пароль не действителен!";
	header("Location: index.php");	

}

} 
}



?>
