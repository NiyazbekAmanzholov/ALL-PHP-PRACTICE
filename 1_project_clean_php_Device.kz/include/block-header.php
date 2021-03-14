<?php 
defined('myeshop') or die('Доступ запрещен!');
 ?>
<div id="wrap">
<div id="block_header">
<div id="header_top_block"><!--Верхний блок-->
	<ul id="header_top_menu">
		<li>Ваш город - <span>Нур - Cултан</span></li>
		<li><a href="index.php">О нас</a></li>
		<li><a href="index.php">Магазины</a></li>
		<li><a href="feedback.php">Контакты</a></li>
		<a id="top"></a>
	</ul>

<!--registration-authorization-->
<?php

if ($_SESSION['auth'] == 'yes_auth')
{
 echo '<p id="auth-user-info" align="right"><img src="images/user.png" />Здравствуйте, '.$_SESSION['auth_name'].'!</p>';   
}else{
  echo '<p id="reg_auth_title" align="right"><a class="top-auth">Вход</a><a href="registration.php">Регистрация</a></p>';     
}	
?>

<div id="block-top-auth"><!--Блок авторизации-->
<div class="corner"></div>
	<form method="post">
		<ul id="input-email-pass">
		<h3>Вход</h3>

		<p id="message-auth">Неверный Логин или Пароль</p>

		<li><center><input type="text" id="auth_login" placeholder="Логин или E-mail" /></center></li>
		<li><center><input type="password" id="auth_pass" placeholder="Пароль" /><span id="button-pass-show-hide" class="pass-show"></span></center></li>

		<ul id="list-auth">
		<li><input type="checkbox" name="rememberme" id="rememberme" /><label for="rememberme">Запомнить меня</label></li>
		<li><a id="remindpass" href="#">Забыли пароль?</a></li>
		</ul>

		<p align="right" id="button-auth" ><a>Вход</a></p>
		<p align="right" class="auth-loading"><img src="images/loading.gif" /></p>
		</ul>
	</form>

<div id="block-remind"><!--Востановление пароля-->
<h3>Востановление<br /> пароля</h3>
<p id="message-remind" class="message-remind-success" ></p>
<center><input type="text" id="remind-email" placeholder="Ваш E-mail" /></center>
<p id="prev-auth">Назад</p>
<p align="right" id="button-remind" ><a>Готово</a></p>
<p align="right" class="auth-loading" ><img src="images/loading.gif" /></p>
</div>
<!--Востановление пароля-->
</div>
</div>
<!--registration-authorization-->

<!--выход-профиль-->
<div id="block-user" >
<div class="corner2"></div>
<ul>
<li><img src="images/user_info.png" /><a href="profile.php">Профиль</a></li>
<li><img src="images/logout.png" /><a id="logout" >Выход</a></li>
</ul>
</div>
<!--выход-профиль-->

<div id="header_middle_block">

<div id="header_title"><!--Блок названия-->
	<a href="index.php">
		<img src="images/device.png" alt=""><p>Device.<span>kz</span></p>
	</a>
</div>

<div id="header_basket_search"><!--Блок поиска товаров-->
<form method="GET" action="search.php?q=" >
<span></span>
<input type="text" id="input-search" name="q" placeholder="Поиск товаров" value="<?php echo $search; ?>" />
<input type="submit" id="button-search" value="Поиск" />
</form>
<!--здесь выводим подсказки при поиске товаров-->
<ul id="result-search"></ul>
<a href="#top" id="top2"><img src="images/iconfinder_arrow-up_1055119.png"></a>
</div>
</div>

<!--Корзина-->
<p align="right" id="block-basket"><img src="images/cart-icon.png" alt=""><a href="cart.php?action=oneclick">Корзина пуста</a></p>

<div id="header_category"><?php include("include/block-category.php");?></div>

<div id="header_sections_goods">
		<li><img src="images/shop.png" alt=""><a href="index.php">Главная</a></li>
		<li><img src="images/new-32.png" alt=""><a href="view_aystopper.php?go=news">Новинки</a></li>
		<li><img src="images/bestprice-32.png" alt=""><a href="view_aystopper.php?go=leaders">Лидеры продаж</a></li>
		<li><img src="images/sale-32.png" alt=""><a href="view_aystopper.php?go=sale">Распродажа</a></li>
</div>

</div>
</div>	