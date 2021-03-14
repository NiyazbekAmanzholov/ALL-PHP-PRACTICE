<?php
session_start();
include 'functions.php';
$db = include 'database/start.php';
$address1 = $db->getAll('address');
$emails =$db->getAll('email');
$main_number =$db->getAll('main_number');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактировать данные</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="edit.php">Админ панель</a>  
  <a class="navbar-brand" href="messages.php">Сообщения</a>
  <a class="navbar-brand" href="index.php">Перейти на сайт</a>  
  <a style="margin-left: 750px;" href="avtorization.php">Выход</a>     
</nav>

<?php if (isset($_SESSION['msg_success'])): ?>                                
  <div class="alert alert-success" role="alert">
      <?php echo $_SESSION['msg_success']; unset ($_SESSION['msg_success']);?>
  </div>
  <?php endif ?> 

  <?php if (isset($_SESSION['msg_error'])): ?>                                
  <div style="color: red;" class="alert alert-warning" role="alert">
      <?php echo $_SESSION['msg_error']; unset ($_SESSION['msg_error']);?>
  </div>
  <?php endif ?> 

<?php foreach($main_number as $number):?> 
<form method="POST" action="main_number.php?id=<?php echo $number['id']; ?>" style="margin-top: 20px;" class="col-md-8 offset-md-2">
  <div class="form-group">
    <label for="exampleInputEmail1">Изменить главный номер в шапке сайта</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number" value="<?php echo $number['number']; ?>" placeholder="номер">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary" name="edit">изменить</button>
</form>
<?php endforeach;?> 	

<?php foreach($emails as $email):?> 
<form method="POST" action="email.php?id=<?php echo $email['id']; ?>" style="margin-top: 20px;" class="col-md-8 offset-md-2">
  <div class="form-group">
    <label for="exampleInputEmail1">Изменить email в футере сайта</label><br>  
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email['email']; ?>" placeholder="email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" class="btn btn-primary">изменить</button>
</form>
<?php endforeach;?> 

<?php foreach($address1 as $address):?> 	
<form method="POST" action="update.php?id=<?php echo $address['id']; ?>" style="margin-top: 20px;" class="col-md-8 offset-md-2">
  <div class="form-group">
    <label for="exampleInputEmail1">Изменить город</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="city" value="<?php echo $address['city']; ?>" placeholder="город">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Изменить улицу</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="street" value="<?php echo $address['street']; ?>" placeholder="улица">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Изменить БЦ</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bc" value="<?php echo $address['bc']; ?>" placeholder="БЦ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Изменить кабинет</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cab" value="<?php echo $address['cab']; ?>" placeholder="кабинет">
  </div>

  <button type="submit" class="btn btn-primary">изменить</button>
</form>
      <?php endforeach;?> 
</body>
</html>