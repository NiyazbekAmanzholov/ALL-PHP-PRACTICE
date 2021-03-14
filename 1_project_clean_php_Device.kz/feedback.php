<?php 
    define('myeshop', true);
    include("include/db_connect.php");
    include("functions/functions.php");
    session_start();  
    include("include/auth_cookie.php");

if ($_POST["send_message"])
{
    $error = array();
    
  if (!$_POST["feed_name"]) $error[] = "Укажите свое имя";  
  
  if(!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",trim($_POST["feed_email"])))
  {
    $error[] = "Укажите корректный E-mail"; 
  }
   
  if (!$_POST["feed_subject"]) $error[] = "Укажите тему письма!";  
  if (!$_POST["feed_text"]) $error[] = "Укажите текст сообщения!";  
  
  if (strtolower($_POST["reg_captcha"]) != $_SESSION['img_captcha'])
  {
    $error[] = "Неверный код с картинки!";
  }  
    
   
   if (count($error))
   {
     $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";  
      
   }else
   {
               send_mail($_POST["feed_email"],
                   'admin@shop.ru',
            $_POST["feed_subject"],
            'Îò: '.$_POST["feed_name"].'<br/>'.$_POST["feed_text"]); 
    
     $_SESSION['message'] = "<p id='form-success'>Ваше сообщение успешно отправлено!</p>";   
    
   }
    
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="trackbar/trackbar.css">

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/shop-script.js"></script>
<script src="js/jquery.cookie.min.js"></script> 
<script src="trackbar/jquery.trackbar.js"></script>
<script src="js/jcarousellite_1.0.1.js"></script> 
<script src="js/TextChange.js"></script>

  <title>Интернет магазин</title>
</head>
<body>

<?php include("include/block-header.php");?>

<div id="wrap"><div id="block_body">

<?php include("include/block-parameter.php");?>

  <div id="block-content">
<?php
   if(isset($_SESSION['message']))
  {
  echo $_SESSION['message'];
  unset($_SESSION['message']);
  }
?>

<form method="post">
<div id="block-feedback">
<ul id="feedback">

<li><label>Ваше Имя</label><input type="text" name="feed_name"  /></li>
<li><label>Ваш E-mail</label><input type="text" name="feed_email"  /></li>
<li><label>Тема</label><input type="text" name="feed_subject"  /></li>
<li><label>Текст сообщения</label><textarea name="feed_text" ></textarea></li>

<li>
<label for="reg_captcha">Защитный код</label>
<div id="block-captcha">
<img src="reg/reg_captcha.php" />
<input type="text" name="reg_captcha" id="reg_captcha" />
<p id="reloadcaptcha">Обновить</p>
</div>
</li>

</ul>
</div>
<p align="right"><input type="submit" name="send_message" id="form_submit" /></p>
</form>

  </div>


<?php include("include/block-news.php"); ?>
</div>
</div>
  
<?php include("include/block-random.php");?>
<?php include("include/block-footer.php");?>

</body>
</html>