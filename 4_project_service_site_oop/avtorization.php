<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">	
	<title>Авторизация</title>
</head>
<body>

<?php if (isset($_SESSION['msg_error'])): ?>                                
    <div style="color: red;" class="alert alert-warning" role="alert">
        <?php echo $_SESSION['msg_error']; unset ($_SESSION['msg_error']);?>
    </div>
<?php endif ?> 

<form style="margin-top: 10%;" class="col-md-3 offset-md-4" method="POST" action="check_login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Авторизация</label>
    <input type="text" name="login" class="form-control" placeholder="Введите логин">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Введите пароль">
  </div>
  <button type="submit" class="btn btn-primary" name="enter">Войти</button>
</form>

</body>
</html>