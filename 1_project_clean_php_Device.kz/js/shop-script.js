$(document).ready(function() {//функция подключения jQuery
 
//news
   $("#newsticker").jCarouselLite({
		vertical: true,
		hoverPause:true,
		btnPrev: "#news-prev",
		btnNext: "#news-next",
		visible: 3,
		auto:3000,
		speed:500
	});
//news
  loadcart();

/*смена списка*/
$("#style-grid").click(function(){
     
$("#block-tovar-grid").show();
$("#block-tovar-list").hide();

$("#style-grid").attr("src","./images/icon-grid-active.png");
$("#style-list").attr("src","./images/icon-list.png");

$.cookie('select_style','grid');  
});
 


$("#style-list").click(function(){
     
$("#block-tovar-grid").hide();
$("#block-tovar-list").show();

$("#style-list").attr("src","./images/icon-list-active.png");
$("#style-grid").attr("src","./images/icon-grid.png");

$.cookie('select_style','list'); 
});

/*cookie*/
if ($.cookie('select_style') == 'grid' )
{
$("#block-tovar-grid").show();
$("#block-tovar-list").hide();

$("#style-grid").attr("src","./images/icon-grid-active.png");
$("#style-list").attr("src","./images/icon-list.png");     
}
else
{
$("#block-tovar-grid").hide();
$("#block-tovar-list").show();

$("#style-list").attr("src","./images/icon-list-active.png");
$("#style-grid").attr("src","./images/icon-grid.png");    
}
/*смена списка*/

//сортировка
$("#select-sort").click(function() {
$("#sorting-list").slideToggle(200);
});
//сортировка

//Категории товаров
$("#index1").click(function() {
$("#category-section1").slideToggle(200);
});

$("#index2").click(function() {
$("#category-section2").slideToggle(200);
});

$("#index3").click(function() {
$("#category-section3").slideToggle(200);
});
//Категории товаров

//Код генерации кода
  $('#genpass').click(function(){
 $.ajax({
  type: "POST",
  url: "./functions/genpass.php",
  dataType: "html",
  cache: false,
  success: function(data) {
  $('#reg_pass').val(data);
  }
});
}); 
//Код генерации кода

//обновление капчи
$('#reloadcaptcha').click(function(){
$('#block-captcha > img').attr("src","reg/reg_captcha.php?r="+ Math.random());
});
//обновление капчи

//блок авторизации
 $('.top-auth').toggle(
       function() {
           $("#block-top-auth").fadeIn(400);
       },
       function() {
           $("#block-top-auth").fadeOut(400);  
       }
    );
//

//глаз
$('#button-pass-show-hide').click(function(){
 var statuspass = $('#button-pass-show-hide').attr("class");
  
    if (statuspass == "pass-show")
    {
       $('#button-pass-show-hide').attr("class","pass-hide");
       
     			            var $input = $("#auth_pass");
			                var change = "text";
			                var rep = $("<input placeholder='Пароль' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
        
    }else
    {
        $('#button-pass-show-hide').attr("class","pass-show");
        
     			            var $input = $("#auth_pass");
			                var change = "password";
			                var rep = $("<input placeholder='Пароль' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;        
       
    }
  }); 
//глаз

//загорается красным
$("#button-auth").click(function() {
        
 var auth_login = $("#auth_login").val();
 var auth_pass = $("#auth_pass").val();

 
 if (auth_login == "" || auth_login.length > 30 )
 {
    $("#auth_login").css("borderColor","#FDB6B6");
    send_login = 'no';
 }else {
    
   $("#auth_login").css("borderColor","#DBDBDB");
   send_login = 'yes'; 
      }

 
if (auth_pass == "" || auth_pass.length > 15 )
 {
    $("#auth_pass").css("borderColor","#FDB6B6");
    send_pass = 'no';
 }else { $("#auth_pass").css("borderColor","#DBDBDB");  send_pass = 'yes'; }


//checkbox
 if ($("#rememberme").prop('checked'))
 {
    auth_rememberme = 'yes';

 }else { auth_rememberme = 'no'; }


 if ( send_login == 'yes' && send_pass == 'yes' )
 { 
  $("#button-auth").hide();
  $(".auth-loading").show();
    
    $.ajax({
  type: "POST",
  url: "include/auth.php",
  data: "login="+auth_login+"&pass="+auth_pass+"&rememberme="+auth_rememberme,
  dataType: "html",
  cache: false,
  success: function(data) {

  if (data == 'yes_auth')
  {
      location.reload();
  }else
  {
      $("#message-auth").slideDown(400);
      $(".auth-loading").hide();
      $("#button-auth").show();    
  } 
}
});  
}
}); 

//блок если забыли пароль
$('#remindpass').click(function(){
    
      $('#input-email-pass').fadeOut(200, function() {  
            $('#block-remind').fadeIn(300);
      });
});

$('#prev-auth').click(function(){
    
      $('#block-remind').fadeOut(200, function() {  
            $('#input-email-pass').fadeIn(300);
      });
});
//блок если забыли пароль

//Востановление пароля
$('#button-remind').click(function(){
    
 var recall_email = $("#remind-email").val();
 
 if (recall_email == "" || recall_email.length > 20 )//ввод не больше 20ти симвалов
 {
    $("#remind-email").css("borderColor","#FDB6B6");//красный цвет при ошибке

 }else //если все норм
 {
   $("#remind-email").css("borderColor","#DBDBDB");//норм цвет
   
   $("#button-remind").hide();
   $(".auth-loading").show();
    
  $.ajax({//запрос в аякс обработчик
  type: "POST",
  url: "include/remind-pass.php",
  data: "email="+recall_email,
  dataType: "html",
  cache: false,//для того что бы ничего не сохранял
  success: function(data) {//если емаил отправлен и есть соответствия с введенным логином

  if (data == 'yes')//обработчик выведит yes и выводит смс success
  {
     $(".auth-loading").hide();
     $("#button-remind").show();
     $('#message-remind').attr("class","message-remind-success").html("На ваш e-mail выслан пароль.").slideDown(400);
     
     setTimeout("$('#message-remind').html('').hide(),$('#block-remind').hide(),$('#input-email-pass').show()", 3000);//cкрываем смс
 
  }else//если ошибка смс error
  {
      $(".auth-loading").hide();
      $("#button-remind").show();
      $('#message-remind').attr("class","message-remind-error").html(data).slideDown(400);
      
  }
  }
}); 
  }
  }); 
//Востановление пароля

//выход-профиль//появление блока
  $('#auth-user-info').toggle(
       function() {
           $("#block-user").fadeIn(100);
       },
       function() {
           $("#block-user").fadeOut(100);
       }
    );
//выход-профиль//появление блока


//обработчик выхода
$('#logout').click(function(){
    
    $.ajax({
  type: "POST",
  url: "include/logout.php",
  dataType: "html",
  cache: false,
  success: function(data) {

  if (data == 'logout')
  {
      location.reload();
  }
}
}); 
});
//обработчик выхода
//блок авторизации

//функция подсказки при поиске товаров
$('#input-search').bind('textchange', function () {
                 
 var input_search = $("#input-search").val();

if (input_search.length >= 3 && input_search.length < 150 )
{
 $.ajax({
  type: "POST",
  url: "include/search.php",
  data: "text="+input_search,
  dataType: "html",
  cache: false,
  success: function(data) {

 if (data > '')
 {
     $("#result-search").show().html(data); 
 }else{
    
    $("#result-search").hide();
 }
      }
}); 

}else
{
  $("#result-search").hide();    
}
});
//функция подсказки при поиске товаров

 //Шаблон проверки e-mal на правильность
    function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
    }
 // контактные данные
  $('#confirm-button-next').click(function(e){   

   var order_fio = $("#order_fio").val();
   var order_email = $("#order_email").val();
   var order_phone = $("#order_phone").val();
   var order_address = $("#order_address").val();
   
 if (!$(".order_delivery").is(":checked"))//если неодна доставка не выбрана
 {
    $(".label_delivery").css("color","#E07B7B");//рамка красная
    send_order_delivery = '0';//0-ошибка

 }else { $(".label_delivery").css("color","black"); send_order_delivery = '1';//1-правильно, цвет черный

  
  // проверка ФИО
 if (order_fio == "" || order_fio.length > 50 )
 {
    $("#order_fio").css("borderColor","#FDB6B6");
   send_order_fio = '0';
   
 }else { $("#order_fio").css("borderColor","#DBDBDB");  send_order_fio = '1';}

  
 //проверка email
 if (isValidEmailAddress(order_email) == false)
 {
    $("#order_email").css("borderColor","#FDB6B6");
  send_order_email = '0';   
 }else { $("#order_email").css("borderColor","#DBDBDB"); send_order_email = '1';}
  
 // проверка телефона
 
  if (order_phone == "" || order_phone.length > 50)
 {
    $("#order_phone").css("borderColor","#FDB6B6");
    send_order_phone = '0';   
 }else { $("#order_phone").css("borderColor","#DBDBDB"); send_order_phone = '1';}
 
 // проверка адреса
 
  if (order_address == "" || order_address.length > 150)
 {
    $("#order_address").css("borderColor","#FDB6B6");
    send_order_address = '0';   
 }else { $("#order_address").css("borderColor","#DBDBDB"); send_order_address = '1';}
  
} 
 // Глобальная проверка
 if (send_order_delivery == "1" && send_order_fio == "1" && send_order_email == "1" && send_order_phone == "1" && send_order_address == "1")
 {
    // Отправляем форму
   return true;
 }

e.preventDefault();
});


//функция добавления в корзину
$('.add-cart-style-list,.add-cart-style-grid,.add-cart,.random-add-cart').click(function(){
              
 var  tid = $(this).attr("tid");

 $.ajax({
  type: "POST",
  url: "include/addtocart.php",
  data: "id="+tid,
  dataType: "html",
  cache: false,
  success: function(data) { 
  loadcart();
      }
});

});

//обновляем надпись
function loadcart(){
     $.ajax({
  type: "POST",
  url: "include/loadcart.php",
  dataType: "html",
  cache: false,
  success: function(data) {
    
  if (data == "0")
  {
  
    $("#block-basket > a").html("Корзина пуста");
  
  }else
  {
    $("#block-basket > a").html(data);

  }  
    
      }
});          
}
//функция добавления в корзину


// Групировка цифр по разрядам
function fun_group_price(intprice) {  

  var result_total = String(intprice);
  var lenstr = result_total.length;
  
    switch(lenstr) {
  case 4: {
  groupprice = result_total.substring(0,1)+" "+result_total.substring(1,4);
    break;
  }
  case 5: {
  groupprice = result_total.substring(0,2)+" "+result_total.substring(2,5);
    break;
  }
  case 6: {
  groupprice = result_total.substring(0,3)+" "+result_total.substring(3,6); 
    break;
  }
  case 7: {
  groupprice = result_total.substring(0,1)+" "+result_total.substring(1,4)+" "+result_total.substring(4,7); 
    break;
  }
  default: {
  groupprice = result_total;  
  }
}  
    return groupprice;
    }
// Групировка цифр по разрядам


//
$('.count-minus').click(function(){

  var iid = $(this).attr("iid");      
 
 $.ajax({
  type: "POST",
  url: "include/count-minus.php",
  data: "id="+iid,
  dataType: "html",
  cache: false,
  success: function(data) {   
  $("#input-id"+iid).val(data);  
  loadcart();
  
  // Переменная с ценой продукта
  var priceproduct = $("#tovar"+iid+" > p").attr("price"); 

  // Цену умножаем на колличество
  result_total = Number(priceproduct) * Number(data);
 
  $("#tovar"+iid+" > p").html(fun_group_price(result_total)+" руб");
  $("#tovar"+iid+" > h5 > .span-count").html(data);
  
  itog_price();
      }
});
  
});
//

//+-
$('.count-plus').click(function(){

  var iid = $(this).attr("iid");      
  
 $.ajax({
  type: "POST",
  url: "include/count-plus.php",
  data: "id="+iid,
  dataType: "html",
  cache: false,
  success: function(data) {   
  $("#input-id"+iid).val(data);  
  loadcart();
  
  // Переменная с ценой продукта
  var priceproduct = $("#tovar"+iid+" > p").attr("price"); 
    // Цену умножаем на колличество
  result_total = Number(priceproduct) * Number(data);
 
  $("#tovar"+iid+" > p").html(fun_group_price(result_total)+" руб");
  $("#tovar"+iid+" > h5 > .span-count").html(data);
  
  itog_price();
      }
});
  
});
//

//
 $('.count-input').keypress(function(e){
    
 if(e.keyCode==13){//код будет выполняться только при нажатии кнопки
     
 var iid = $(this).attr("iid");
 var incount = $("#input-id"+iid).val();        
 
 $.ajax({
  type: "POST",
  url: "include/count-input.php",
  data: "id="+iid+"&count="+incount,
  dataType: "html",
  cache: false,
  success: function(data) {
  $("#input-id"+iid).val(data);  
  loadcart();
    
  // Переменная с ценой продукта
  var priceproduct = $("#tovar"+iid+" > p").attr("price"); 
    // Цену умножаем на колличество
  result_total = Number(priceproduct) * Number(data);


  $("#tovar"+iid+" > p").html(fun_group_price(result_total)+" руб");
  $("#tovar"+iid+" > h5 > .span-count").html(data);
  itog_price();

      }
}); 
  }
});
//
function  itog_price(){
 $.ajax({
  type: "POST",
  url: "include/itog_price.php",
  dataType: "html",
  cache: false,
  success: function(data) {

  $(".itog-price > strong").html(data);
}
});        
}

//отправка отзывов
$('#button-send-review').click(function(){

   var name = $("#name_review").val();
   var good = $("#good_review").val();
   var bad = $("#bad_review").val();
   var comment = $("#comment_review").val();
   var iid = $("#button-send-review").attr("iid");

    if (name != "")
     {
          name_review = '1';
          $("#name_review").css("borderColor","#DBDBDB");
      }else {
           name_review = '0';
           $("#name_review").css("borderColor","#FDB6B6");
      }
                  
    if (good != "")
       {
          good_review = '1';
          $("#good_review").css("borderColor","#DBDBDB");
      }else {
          good_review = '0';
          $("#good_review").css("borderColor","#FDB6B6");
      }
            
    if (bad != "")
     {
          bad_review = '1';
          $("#bad_review").css("borderColor","#DBDBDB");
     }else {
          bad_review = '0';
          $("#bad_review").css("borderColor","#FDB6B6");
     } 

//глобальная проверка
    if ( name_review == '1' && good_review == '1' && bad_review == '1')
      {
         $("#button-send-review").hide();
         $("#reload-img").show();
                  
      $.ajax({
         type: "POST",
         url: "include/add_review.php",
         data: "id="+iid+"&name="+name+"&good="+good+"&bad="+bad+"&comment="+comment,
         dataType: "html",
         cache: false,
         success: function() {
         setTimeout("$.fancybox.close()", 1000);
         }
         });  
         }         
});
//отправка отзывов

//like
$('#likegood').click(function(){
          
 var tid = $(this).attr("tid");
 
 $.ajax({
  type: "POST",
  url: "include/like.php",
  data: "id="+tid,
  dataType: "html",
  cache: false,
  success: function(data) {  
  
  if (data == 'no')
  {
    alert('Вы уже голосовали!');
  }  
   else
   {
    $("#likegoodcount").html(data);
   }

}
});
});
//like
}); 























