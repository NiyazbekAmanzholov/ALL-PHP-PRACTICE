<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
define('myeshop', true);    
include("db_connect.php");
include("../functions/functions.php");

$email = clear_string($_POST["email"]);

if ($email != "")//если email не пустой то...
{
    
   $result = mysql_query("SELECT email FROM reg_user WHERE email='$email'",$link);
If (mysql_num_rows($result) > 0)
{
    
// генерация пароля
    $newpass = fungenpass();
    
// шифрование пароля
    $pass   = md5($newpass);
    $pass   = strrev($pass);
    $pass   = strtolower("9nm2rv8q".$pass."2yo6z");    
 
// обновление пароля на новый
$update = mysql_query ("UPDATE reg_user SET pass='$pass' WHERE email='$email'",$link);

    
// отправка нового пароля на почту
   
	         send_mail( 'kunaev993@gmail.com',//от кого будет отправлен mail noreply@shop.ru
			             $email,
						'Новый пароль для сайта MyShop.ru',
						'Ваш пароль: '.$newpass); // $newpass-новый сгенер пароль 
   
   echo 'yes';
    
}else
{
    echo 'Такой E-mail не существует!';
}

}
else
{
    echo 'Новый пароль отправлен на ваш E-mail';
}

}



?>