<?php
defined('myeshop') or die('Доступ запрещен!');
$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'db_shop'; 
 
$link = mysql_connect($db_host,$db_user,$db_pass);
 
mysql_select_db($db_database,$link) or die("Нет соединения с БД ".mysql_error());
mysql_query("SET names 'utf8';");
?>