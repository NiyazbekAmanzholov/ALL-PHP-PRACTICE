<?php
defined('myeshop') or die('Доступ запрещен!');
?>

<p class="header_category_title">Категории товаров:</p>	
	
<li><a id="index1"><img src="https://cdn4.iconfinder.com/data/icons/standard-free-icons/139/Phone01-512.png" id="mobile-images" alt=""><p>Мобильные телефоны</p></a>

<ul id="category-section1" class="category-section">
	
<li><a href="view_cat.php?type=mobile"><strong>Все модели</strong></a></li>

<?php 
$result = mysql_query("SELECT * FROM category WHERE type='mobile'",$link);
if (mysql_num_rows($result) > 0)
{
	$row = mysql_fetch_array($result);

do
{

echo '
<li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
';
}
while ($row = mysql_fetch_array($result));
}
?>

</ul>
<li>



<li id="index2li"><a id="index2"><img src="https://cdn3.iconfinder.com/data/icons/glypho-free/64/laptop-512.png" alt=""><p>Ноутбуки</p></a>

<ul id="category-section2" class="category-section">
	
<li><a href="view_cat.php?type=notebook"><strong>Все модели</strong></a></li>


<?php 
$result = mysql_query("SELECT * FROM category WHERE type='notebook'",$link);
if (mysql_num_rows($result) > 0)
{
	$row = mysql_fetch_array($result);

do
{

echo '
<li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
';
}
while ($row = mysql_fetch_array($result));
}
?>

</ul>
<li>



<li><a id="index3"><img src="https://cdn1.iconfinder.com/data/icons/feather-2/24/smartphone-512.png" id="mobile-images" alt=""><p>Планшеты</p></a>

<ul id="category-section3" class="category-section">
	
<li><a href="view_cat.php?type=notepad"><strong>Все модели</strong></a></li>

<?php 
$result = mysql_query("SELECT * FROM category WHERE type='notepad'",$link);
if (mysql_num_rows($result) > 0)
{
	$row = mysql_fetch_array($result);

do
{

echo '
<li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
';
}
while ($row = mysql_fetch_array($result));
}
?>

</ul>
<li>






