<?php 
      define('myeshop', true);
      include("include/db_connect.php");//подкл к файлу где находится бд
      include("functions/functions.php"); 
      include("include/auth_cookie.php");
      
$brand = clear_string($_GET["brand"]);
$dioganal = clear_string($_GET["dioganal"]);
$mp = clear_string($_GET["mp"]);
$color = clear_string($_GET["color"]); 
$sim = clear_string($_GET["sim"]);
$memory = clear_string($_GET["memory"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="trackbar/trackbar.css">

<script src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/shop-script.js"></script>
<script src="js/jcarousellite_1.0.1.js"></script>	
<script type="text/javascript" src="js/jquery.cookie.min.js"></script>	
<script src="trackbar/jquery.trackbar.js"></script>
<script src="js/TextChange.js"></script>   
    
	<title>Поиск - <?php echo $brand;?> - <?php echo $dioganal;?> - <?php echo $mp;?> - <?php echo $color;?> - <?php echo $sim;?> - <?php echo $memory;?></title>
</head>
<body>

<?php include("include/block-header.php");?>

<div id="wrap"><div id="block_body">

<?php include("include/block-parameter.php");?>

	<div id="block-content">	

<?php
//Поиск по параметрам
$start_price = (int)$_GET["start_price"];
$end_price = (int)$_GET["end_price"];

if (!empty($end_price))
{
  if (!empty($end_price)) $query_price = "AND price BETWEEN $start_price AND $end_price";
}
//Поиск по параметрам

  $result = mysql_query("SELECT * FROM table_products WHERE title LIKE '%$brand%' AND mini_features LIKE '%$dioganal%' AND mini_features LIKE '%$mp%' AND mini_features LIKE '%$sim%' AND mini_features LIKE '%$memory%' AND title LIKE '%$color%' AND visible='1' $query_price ORDER BY products_id DESC",$link);  

if (mysql_num_rows($result) > 0)
{
 $row = mysql_fetch_array($result); 
 
 echo '<div id="block-sorting">
      <p id="nav-breadcrumbs"><a href="index.php">Главная страница</a> \ Все товары</p>
      <ul id="options-list">
      <li>Вид:</li>       
      <li><img src="./images/icon-grid.png" alt="" id="style-grid"></li>
      <li><img src="./images/icon-list.png" alt="" id="style-list"></li>  
    </div>

<ul id="block-tovar-grid">
    ';

do
{

if  ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
{
$img_path = './uploads_images/'.$row["image"];
$max_width = 150; 
$max_height = 150; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = "images/no-image.png";
$width = 110;
$height = 200;
} 
 

echo '  
  <li>
  <div class="block-images-grid" >
  <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
  </div>
  <p class="style-title-grid" ><a href="view_content.php?id='.$row["products_id"].'">'.$row["title"].'</a></p>
  <ul class="reviews-and-counts-grid">
  <li><img src="images/eye-icon.png" /><p>'.$row["count"].'</p></li>
  <li><img src="images/comment-icon.png" /><p>0</p></li>
  </ul>
  <a class="add-cart-style-grid" tid="'.$row["products_id"].'"></a>
  <p class="style-price-grid" ><strong>'.group_numerals($row["price"]).'</strong> KZT.</p>
  <div class="mini-features" >
  '.$row["mini_features"].'
  </div>
  </li>	
';
}
	while ($row = mysql_fetch_array($result)); 


 ?>
</ul>


<ul id="block-tovar-list">
<?php 
  $result = mysql_query("SELECT * FROM table_products WHERE title LIKE '%$brand%' AND mini_features LIKE '%$dioganal%' AND mini_features LIKE '%$mp%' AND mini_features LIKE '%$sim%' AND mini_features LIKE '%$memory%' AND title LIKE '%$color%' AND visible='1' $query_price ORDER BY products_id DESC",$link);  

if (mysql_num_rows($result) > 0)
{
 $row = mysql_fetch_array($result); 
 
do
{


if  ($row["image"] != "" && file_exists("./uploads_images/".$row["image"]))
{
$img_path = './uploads_images/'.$row["image"];
$max_width = 150; 
$max_height = 150; 
 list($width, $height) = getimagesize($img_path); 
$ratioh = $max_height/$height; 
$ratiow = $max_width/$width; 
$ratio = min($ratioh, $ratiow); 
$width = intval($ratio*$width); 
$height = intval($ratio*$height);    
}else
{
$img_path = "images/noimages80x70.png";
$width = 80;
$height = 70;
} 
 

echo '  
  <li>
  <div class="block-images-list" >
  <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'" />
  </div>

  <ul class="reviews-and-counts-list">
  <li><img src="images/eye-icon.png" /><p>'.$row["count"].'</p></li>
  <li><img src="images/comment-icon.png" /><p>0</p></li>
  </ul>

  <p class="style-title-list" ><a href="view_content.php?id='.$row["products_id"].'">'.$row["title"].'</a></p>

  <a class="add-cart-style-list" tid="'.$row["products_id"].'"></a>
  <p class="style-price-list" ><strong>'.group_numerals($row["price"]).'</strong> KZT.</p>
  <div class="style-text-list" >
  '.$row["mini_description"].'
  </div>
  </li>	
';
}
	while ($row = mysql_fetch_array($result)); 
 }
 }else
 {
  echo'<h3>Товара нет в наличии!</h3>';
 }
 ?>
</ul>
	</div>


<?php include("include/block-news.php");?>
</div></div>

<?php include("include/block-random.php");?>
<?php include("include/block-footer.php");?>


</body>
</html>