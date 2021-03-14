$(document).ready(function() {

//delete good
	$('.delete').click(function(){
		
		var rel = $(this).attr("rel");
		
		$.confirm({
			'title'		: 'Подтверждение удаления',
			'message'	: 'После удаления востановление будет невозможно! Продолжить?',
			'buttons'	: {
				'Да'	: {
					'class'	: 'blue',
					'action': function(){
						location.href = rel;
					}
				},
				'Нет'	: {
					'class'	: 'gray',
					'action': function(){}
				}
			}
		});
	});
//delete good  
    
//товары  
  $('#select-links').click(function(){
 $("#list-links,#list-links-sort").slideToggle(200);     
 });   

 $('.h3click').click(function(){ 
 $(this).next().slideToggle(400); 
 });
//товары 

//добавление файла
  var count_input = 1;

  $("#add-input").click(function(){
    
  count_input++;  
  
  $('<div id="addimage'+count_input+'" class="addimage"><input type="hidden" name="MAX_FILE_SIZE" value="2000000"/><input type="file" name="galleryimg[]" /><a class="delete-input" rel="'+count_input+'" >Удалить</a></div>').fadeIn(300).appendTo('#objects'); 
   
  }); 
  //добавление файла

//удаление файла
  $('.delete-input').live('click',function(){
    
	var rel = $(this).attr("rel");
  
	$("#addimage"+rel).fadeOut(300,function(){	   
    $("#addimage"+rel).remove();      
	});
});
//удаление файла

//delete-gallery
  $('.del-img').click(function(){
    var img_id = $(this).attr("img_id");
    var title_img = $("#del"+img_id+" > img").attr("title");
    
  $.ajax({
  type: "POST",
  url: "./actions/delete-gallery.php",
  data: "id="+img_id+"&title="+title_img,
  dataType: "html",
  cache: false,
  success: function(data) { 
  if (data == "delete")
  {
     $("#del"+img_id).fadeOut(300);
  }
     }
}); 
 });
//delete-gallery


//delete-cat
$('.delete-cat').click(function(){
    
   var selectid = $("#cat_type option:selected").val();
     
   if (!selectid)
   {
       $("#cat_type").css("borderColor","#F5A4A4");
   }else
   {
  $.ajax({
  type: "POST",
  url: "./actions/delete-category.php",
  data: "id="+selectid,
  dataType: "html",
  cache: false,
  success: function(data) {
    
  if (data == "delete")
  {
     $("#cat_type option:selected").remove();
  }
    }
         });       
   }             
});
//delete-cat
 
   $('.block-clients').click(function(){

 $(this).find('ul').slideToggle(300);
   
 });
 
 
 //add_administrators/выбрать все чекбоксы
 $('#select-all').click(function(){
    $(".privilege input:checkbox").attr('checked', true);           
});
 //add_administrators/выбрать все чекбоксы


 //add_administrators/убираем все чекбоксы
$('#remove-all').click(function(){
    $(".privilege input:checkbox").attr('checked', false);           
});
 //add_administrators/убираем все чекбоксы
 
   








   
 });