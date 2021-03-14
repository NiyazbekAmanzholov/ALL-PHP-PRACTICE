<?php 
include 'functions.php';
$db = include 'database/start.php';

$post = $db->getOne('posts', $_GET['id']);
//dd($post);
 ?>


<h1><?php echo $post['title']; ?></h1>






