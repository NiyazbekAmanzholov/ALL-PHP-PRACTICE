<?php 
include 'functions.php';

$db = include 'database/start.php';
$posts =$db->getAll('posts');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="edit.php">Админ панель</a> 	
  <a class="navbar-brand" href="messages.php">Сообщения</a>
  <a class="navbar-brand" href="index.php">Перейти на сайт</a> 
  <a style="margin-left: 750px;" href="avtorization.php">Выход</a>     
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				

				  <tbody>
				  	<?php foreach($posts as $post):?>
				    <tr>
				      <th style="width: 120px;" scope="row">Имя</th>
				      <td><a><?php echo $post['name']; ?></a></td>			      			      
				    </tr>

				    <tr>
				      <th scope="row">Номер</th>
				      <td><a href="tel:<?php echo $post['number']; ?>"><?php echo $post['number']; ?></a></td>			      			      
				    </tr>

				    <tr>
				      <th scope="row">Сообщение</th>
				      <td class="card-title"><?php echo $post['message']; ?></td>			      			      
				    </tr>	

				    <tr>
		      			      
				      <td>
						<a href="delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger" onclick="return confirm('are you sure?')">Удaлить</a>					
				      </td>
				    </tr>				    			    

				  	<?php endforeach;?>
				  </tbody>
				</table>
		</div>
	</div>
</div>

</body>
</html>