<?php 
      define('myeshop', true);
      include("include/db_connect.php");//подкл к файлу где находится бд
      include("functions/functions.php");
      session_start();
      include("include/auth_cookie.php");

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
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/TextChange.js"></script>
    
<script type="text/javascript">
$(document).ready(function() {  
      $('#form_reg').validate(
        { 
          // правила для проверки
          rules:{
            "reg_login":{
              required:true,
              minlength:5,
                            maxlength:15,
                            remote: {
                            type: "post",    
                        url: "reg/check_login.php"
                                }
            },
            "reg_pass":{
              required:true,
              minlength:7,
                            maxlength:15
            },
            "reg_surname":{
              required:true,
                            minlength:3,
                            maxlength:15
            },
            "reg_name":{
              required:true,
                            minlength:3,
                            maxlength:15
            },
            "reg_patronymic":{
              required:true,
                            minlength:3,
                            maxlength:25
            },
            "reg_email":{
                required:true,
              email:true
            },
            "reg_phone":{
              required:true
            },
            "reg_address":{
              required:true
            },
            "reg_captcha":{
              required:true,
                            remote: {
                            type: "post",    
                        url: "reg/check_captcha.php"
                        
                                }
                            
            }
          },

          // выводимое смс
          messages:{
            "reg_login":{
              required:"Укажите Логин!",
                            minlength:"От 5 до 15 симвалов!",
                            maxlength:"От 5 до 15 симвалов!",
                            remote: "Логин занят!"
            },
            "reg_pass":{
              required:"Укажите Пароль!",
                            minlength:"От 7 до 15 симвалов!",
                            maxlength:"От 7 до 15 симвалов!"
            },
            "reg_surname":{
              required:"Укажите вашу Фамилию!",
                            minlength:"От 3 до 20 симвалов!",
                            maxlength:"От 3 до 20 симвалов!"                            
            },
            "reg_name":{
              required:"Укажите ваше Имя!",
                            minlength:"От 3 до 15 симвалов!",
                            maxlength:"От 3 до 15 симвалов!"                               
            },
            "reg_patronymic":{
              required:"Укажите ваше Отчество!",
                            minlength:"От 3 до 25 симвалов!",
                            maxlength:"От 3 до 25 симвалов!"  
            },
            "reg_email":{
                required:"Укажите свой E-mail",
              email:"Не корректный E-mail"
            },
            "reg_phone":{
              required:"Укажите номер телефона!"
            },
            "reg_address":{
              required:"Необходимо указать адрес доставки!"
            },
            "reg_captcha":{
              required:"Введите код с картинки!",
                            remote: "Не верный код проверки!"
            }
          },
          
  submitHandler: function(form){
  $(form).ajaxSubmit({
  success: function(data) { 
                 
        if (data == 'true')
    {
       $("#block-form-registration").fadeOut(300,function() {
        
        $("#reg_message").addClass("reg_message_good").fadeIn(400).html("Вы успешно зарегистрированы");
        $("#form_submit").hide();
        
       });
         
    }
    else
    {
       $("#reg_message").addClass("reg_message_error").fadeIn(400).html(data); 
    }
    } 
      }); 
      }
      });
      });
     
</script>

	<title>Регистрация</title>
</head>
<body>

<?php include("include/block-header.php");?>

<div id="wrap"><div id="block_body">

<?php include("include/block-parameter.php");?>

	<div id="block-content">

<h2 class="h2-title">Регистрация</h2>
<form method="post" id="form_reg" action="reg/handler_reg.php">
<p id="reg_message"></p>
<div id="block-form-registration">
<ul id="form-registration">

<li>
<label>Логин</label>
<span class="star" >*</span>
<input type="text" name="reg_login" id="reg_login" />
</li>

<li>
<label>Пароль</label>
<span class="star" >*</span>
<input type="text" name="reg_pass" id="reg_pass" />
<span id="genpass">Сгенерировать</span>
</li>

<li>
<label>Фамилия</label>
<span class="star" >*</span>
<input type="text" name="reg_surname" id="reg_surname" />
</li>

<li>
<label>Имя</label>
<span class="star" >*</span>
<input type="text" name="reg_name" id="reg_name" />
</li>

<li>
<label>Отчество</label>
<span class="star" >*</span>
<input type="text" name="reg_patronymic" id="reg_patronymic" />
</li>

<li>
<label>E-mail</label>
<span class="star" >*</span>
<input type="text" name="reg_email" id="reg_email" />
</li>

<li>
<label>Мобильный телефон</label>
<span class="star" >*</span>
<input type="text" name="reg_phone" id="reg_phone" />
</li>

<li>
<label>Адрес доставки</label>
<span class="star" >*</span> 
<input type="text" name="reg_address" id="reg_address" />
</li>

<li>
<div id="block-captcha">

<img src="reg/reg_captcha.php" />
<input type="text" name="reg_captcha" id="reg_captcha" />

<p id="reloadcaptcha">Обновить</p>
</div>
</li>

</ul>
</div>

<p align="right"><input type="submit" name="reg_submit" id="form_submit" value="Регистрация" /></p>

</form>

  </div>

<?php include("include/block-news.php"); ?>
</div></div>

<?php include("include/block-random.php");?>
<?php include("include/block-footer.php");?>

</body>
</html>