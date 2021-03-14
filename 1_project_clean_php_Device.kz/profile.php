<?php  
define('myeshop', true);
    session_start();  

if ($_SESSION['auth'] == 'yes_auth')//только авториз пользователям
{ 

    include("include/db_connect.php");//подкл к файлу где находится бд 
    include("functions/functions.php");

//при нажатии кнопки
   if ($_POST["save_submit"])
     {
        
    $_POST["info_surname"] = clear_string($_POST["info_surname"]);
    $_POST["info_name"] = clear_string($_POST["info_name"]);
    $_POST["info_patronymic"] = clear_string($_POST["info_patronymic"]);
    $_POST["info_address"] = clear_string($_POST["info_address"]);
    $_POST["info_phone"] = clear_string($_POST["info_phone"]);
    $_POST["info_email"] = clear_string($_POST["info_email"]);     
              
    $error = array();
  
    $pass   = md5($_POST["info_pass"]);
    $pass   = strrev($pass);
    $pass   = "9nm2rv8q".$pass."2yo6z";
    
  if($_SESSION['auth_pass'] != $pass)//сессия которая хранит зашифрованный пароль
  {
    $error[]='Неверный текущий пароль!';
  }else
    {   
      if($_POST["info_new_pass"] != "")
  {
            if(strlen($_POST["info_new_pass"]) < 7 || strlen($_POST["info_new_pass"]) > 15)
              {
               $error[]='Новый пароль должен быть от 7 до 15 симвалов!';
              }else
                {
                     $newpass   = md5(clear_string($_POST["info_new_pass"]));
                     $newpass   = strrev($newpass);
                     $newpass   = "9nm2rv8q".$newpass."2yo6z";
                     $newpassquery = "pass='".$newpass."',";//для обновления нового пароля в бд
                }
  }


//проверка инициалов    
        if(strlen($_POST["info_surname"]) < 3 || strlen($_POST["info_surname"]) > 15)
  {
    $error[]='Укажите Фамилию от 3 до 15 симвалов!';
  }
    
    
        if(strlen($_POST["info_name"]) < 3 || strlen($_POST["info_name"]) > 15)
  {
    $error[]='Укажите Имя от 3 до 15 симвалов!';
  }
    
    
        if(strlen($_POST["info_patronymic"]) < 3 || strlen($_POST["info_patronymic"]) > 25)
  {
    $error[]='Укажите Отчество от 3 до 25 симвалов!';
  }  
    
    
        if(!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",trim($_POST["info_email"])))
  {
    $error[]='Укажите корректный email!';
  }
    
      if(strlen($_POST["info_phone"]) == "")//если поле пустое
  {
    $error[]='Укажите номер телефона!';
  } 
    
      if(strlen($_POST["info_address"]) == "")//если поле пустое
  {
    $error[]='Укажите адресс доставки!';
  }      
    } 

//если есть какие либо ошибки
  if(count($error))
  {
    $_SESSION['msg'] = "<p align='left' id='form-error'>".implode('<br />',$error)."</p>";
  }else
    {
        $_SESSION['msg'] = "<p align='left' id='form-success'>Ваши данные успешно сохраннены!</p>";

//здесь вводим новые данные в бд          
     $dataquery = $newpassquery."surname='".$_POST["info_surname"]."',name='".$_POST["info_name"]."',patronymic='".$_POST["info_patronymic"]."',email='".$_POST["info_email"]."',phone='".$_POST["info_phone"]."',address='".$_POST["info_address"]."'";      
     $update = mysql_query("UPDATE reg_user SET $dataquery WHERE login = '{$_SESSION['auth_login']}'",$link);
      
    if ($newpass){ $_SESSION['auth_pass'] = $newpass; } //если существуют данные пароля в $newpass новый пароль то в сессию дабавляем новый пароль
    
    $_SESSION['auth_surname'] = $_POST["info_surname"];
    $_SESSION['auth_name'] = $_POST["info_name"];
    $_SESSION['auth_patronymic'] = $_POST["info_patronymic"];
    $_SESSION['auth_address'] = $_POST["info_address"];
    $_SESSION['auth_phone'] = $_POST["info_phone"];
    $_SESSION['auth_email'] = $_POST["info_email"];        
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

  <div id="wrap"><div id="block_header"><?php include("include/block-header.php");?></div></div>  

<div id="wrap"><div id="block_body">

  <div id="block_parameters"><?php include("include/block-parameter.php");?></div>

  <div id="block-content">  

 <h3 class="title-h3" >Изменение профиля</h3>

<?php
  //выводим ошибки и удоляем при исправлении
    if($_SESSION['msg'])
    {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    }
    
?>

<form method="post">

<ul id="info-profile">
<li>
<label for="info_pass">Текущий пароль</label>
<span class="star">*</span>
<input type="text" name="info_pass" id="info_pass" value="" />
</li>

<li>
<label for="info_new_pass">Новый пароль</label>
<span class="star">*</span>
<input type="text" name="info_new_pass" id="info_new_pass" value="" />
</li>

<li>
<label for="info_surname">Фамилия</label>
<span class="star">*</span>
<input type="text" name="info_surname" id="info_surname" value="<?php echo $_SESSION['auth_surname']; ?>"  />
</li>

<li>
<label for="info_name">Имя</label>
<span class="star">*</span>
<input type="text" name="info_name" id="info_name" value="<?php echo $_SESSION['auth_name']; ?>"  />
</li>

<li>
<label for="info_patronymic">Отчество</label>
<span class="star">*</span>
<input type="text" name="info_patronymic" id="info_patronymic" value="<?php echo $_SESSION['auth_patronymic']; ?>" />
</li>


<li>
<label for="info_email">E-mail</label>
<span class="star">*</span>
<input type="text" name="info_email" id="info_email" value="<?php echo $_SESSION['auth_email']; ?>" />
</li>

<li>
<label for="info_phone">Телефон</label>
<span class="star">*</span>
<input type="text" name="info_phone" id="info_phone" value="<?php echo $_SESSION['auth_phone']; ?>" />
</li>

<li>
<label for="info_address">Адрес доставки</label>
<span class="star">*</span>
<textarea name="info_address"  > <?php echo $_SESSION['auth_address']; ?> </textarea>
</li>

</ul>

 <p align="right"><input type="submit" id="form_submit" name="save_submit" value="Сохранить" /></p>
</form>

  </div>


  <div id="block_news"><?php include("include/block-news.php"); ?></div>
</div>
</div>

  <div id="wrap"><div id="block_footer"></div></div>

</body>
</html>
<?php 
} else {header("Location: index.php");}//иначе перенаправить на index.php 
 ?>