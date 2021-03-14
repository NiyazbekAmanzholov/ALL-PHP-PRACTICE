<?php
	session_start();
	$db = new PDO("mysql:host=localhost; dbname=crud_chat", admin, 930421351136);

//index.php
//получение всех статей//index.php
function get_comments(){
	global $db;//делаем переменную глобальной
	return $comments = $db->query("SELECT * FROM users,comment_table WHERE visible='1' AND users.id = comment_table.comment_id");
}

//index.php/like
if (isset($_POST['like_enter'])){
	$db->query("UPDATE comment_table SET like_com = like_com + 1 WHERE com_auto_id='$_POST[like_id]'");   
	header("Location: index.php");
}

//block_header.php/index.php/profile.php/Выводим данные авторизированного из таблицы users в шапку и в комментрарий
function get_users_table(){
	global $db;
	return $data = $db->query("SELECT * FROM users WHERE email='$_SESSION[username]'");
}

//Функция выводит фото пользователя либо заглушку 
function get_image($photo){
	if($photo["img"] > 0){
	return "img/" . $photo["img"];
	}else
	{
	return "img/no-user.jpg"; 
	}
}

//просмотры в page.php
function views_update($id){
	global $db;
	$db->query("UPDATE comment_table SET views = views + 1 WHERE com_auto_id = $id");	
}

//page.php and single_page.php
//получение cтраницы по id
function get_page($id){
	global $db;
	return $pages = $db->query("SELECT * FROM comment_table,users WHERE users.id = comment_table.comment_id AND com_auto_id = $id");	
}

//admin.php
//получение всех коментарий//admin.php
function get_admin(){
	global $db;
	return $admins = $db->query("SELECT * FROM comment_table,users WHERE users.id = comment_table.comment_id");
}

//visible/admin.php
if (isset($_GET['visible'])){
	$id = $_GET['visible'];
	$db->query("UPDATE comment_table SET visible = '1' WHERE com_auto_id=$id");   
	$_SESSION['msg_success'] = "Коментарий видим на главной странице!";
	header("Location: admin.php");
}

//ban/admin.php
if (isset($_GET['ban'])){
	$id = $_GET['ban'];
	$db->query("UPDATE comment_table SET visible = '0' WHERE com_auto_id=$id");   
	$_SESSION['msg_success'] = "Коментарий не видим на главной странице!";
	header("Location: admin.php");
}

//delete/admin.php
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$db->query("DELETE FROM comment_table WHERE com_auto_id=$id");     
	$_SESSION['msg_success'] = "Коментарий удален!";
	header("Location: admin.php");
}

//коментарий/index.php
if (isset($_POST['submit']))
	{
	$error = array();
	if (!$_POST["text"]) $error[] = "Укажите коментарий!";
	if (strlen($_POST['name']) > 20 ) $error[] = "Имя должно содержать не больше 20 символа!";    
	if (strlen($_POST['text']) < 15) $error[] = "Коментарий должен содержать не меньше 15 ти букв!";    
	if (count($error))
	{
	$_SESSION['msg_error'] = implode('<br />',$error);
	header("Location: index.php");
	}else{
	$db->query("INSERT INTO comment_table (comment_id, comment, date) VALUES ('$_POST[userID]', '$_POST[text]', NOW())");
	$_SESSION['msg_success'] = "Комментарий отправлен!";
	header("Location: index.php");
	}
}

//search.php
//поиск по коментарию
function comments_by_search($id){
	global $db;
	return $search = $db->query("SELECT * FROM comment_table,users WHERE comment LIKE '%$id%' AND visible='1'  AND users.id = comment_table.comment_id");
}
?>