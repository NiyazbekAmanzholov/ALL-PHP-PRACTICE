<?php
defined('myeshop') or die('Доступ запрещен!');
?>

<div id="block_parameters">

<p class="header_title">Поиск по параметрам</p>	

<p class="title_filter">Стоимость</p>

<form action="search_filter.php" method="GET">
	

<div id="block_input_price">
	
<ul>
	<li><p>от</p></li>
	<li><input type="text" id="start_price" name="start_price" value="1000"></li>
	<li><p>до</p></li>
	<li><input type="text" id="end_price" name="end_price" value="400000"> KZT</li>	
</ul>
</div>

<p class="title_filter">Производители</p>

<div class="checkbox_brand">

<ul>
<li><p>Бренд</p></li>
<li>
<select name="brand">
<option><?php echo $brand; ?></option>
<?php 
	$result = mysql_query("SELECT * FROM category WHERE type='mobile'",$link);

if (mysql_num_rows($result) > 0)
{
	$row = mysql_fetch_array($result);
do
{

echo '<option >'.$row["brand"].'</option>';

}
while ($row = mysql_fetch_array($result)); 	
}

?>
</select>
</li>
</ul>



<ul>
<li><p>Цвет:</p></li>
<li>
<select name="color">
<option><?php echo $color; ?></option>
<option >Черный</option>
<option >Белый</option>
<option >Серый</option>
<option >Красный</option>
</select> 
</li>
</ul>



<ul>
<li><p>SIM-карта:</p></li>
<li>
<select name="sim">
<option><?php echo $sim; ?></option>
<option >одна</option>
<option >две</option>
</select> 
</li>
</ul>



<ul>
<li><p>Диагональ экрана, дюйм:</p></li>
<li>
<select name="dioganal">
<option><?php echo $dioganal; ?></option>
<option >6.1</option>
<option >6.5</option>
<option >6.4</option>
</select> 
</li>
</ul>



<ul>
<li><p>Мпикс:</p></li>
<li>
<select name="mp">
<option><?php echo $mp; ?></option>
<option >12</option>
<option >8</option>
<option >25</option>
</select> 
</li>
</ul>



<ul>
<li><p>Встроенная память:</p></li>
<li>
<select name="memory">
<option><?php echo $memory; ?></option>
<option >64</option>
<option >32</option>
<option >8</option>
</select> 
</li>
</ul>



<a id="delete_param" href="index.php">Сброс параметрав</a>


</div>

<center><input type="submit" name="submit" id="button_param_search" value=" "></center>

</form>

</div>