<?php 

function uploadImage($image)
{

$name = $image['name'];//название папки
$tmp_name = $_FILES['image']['tmp_name'];//место где лежит 

move_uploaded_file($tmp_name,  "uploads/" . $name);//место куда переносим

}

uploadImage($_FILES['image']);


 ?>

 <img src="uploads/no-user.jpg" alt="">
