<?php 
session_start();
include 'functions.php';

$db = include 'database/start.php';

$photos =$db->getAll('slider');

$main_number =$db->getAll('main_number');

$all_numbers =$db->getAll('all_numbers');

$emails =$db->getAll('email');

$address =$db->getAll('address');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>

	<title>TOO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	
<nav style="position:fixed;opacity:0.8;z-index: 1;width: 100%;" class="navbar navbar-expand-lg navbar-light bg-light nav1">
  <a class="navbar-brand" href="#"><img style="height: 50px;" src="img/Main.h1.gif" alt=""></a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	  <li class="nav-item">
        <a class="navbar-brand" id="#too" href="#too">ТОО «Сергали Лифт»</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#about">О компании</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Услуги</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#advantages">Преимущества</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="#application">Оставить заявку</a>
      </li>
      <?php foreach($main_number as $number):?> 
      <li style="margin-left: 240px;" class="nav-item">
	      <a href="tel:<?php echo $number['number']; ?>" class="btn btn-outline my-2 my-sm-0"><img src="img/iconfinder_icon-ios7-telephone_211830.png"><?php echo $number['number']; ?></a>	      
      </li> 
      <?php endforeach;?> 
    </ul>
  </div>
</nav>
<!---->
<nav style="position:fixed;opacity:0.8;z-index: 1;width: 100%;" class="navbar navbar-expand-lg navbar-light bg-light nav2">
	<ul>
		<li>
			<a id="too"><img style="height: 50px;" src="img/Main.h1.gif" alt=""></a>
			<a style="font-size: 170%;color:gray;" href="#too">ТОО «Сергали Лифт»</a>
		</li>

		<li>
			<a class="nav_menu nav-link" href="#about">О компании</a>
		</li>
		<li>
			<a class="nav_menu nav-link" href="#services">Услуги</a>
		</li>
		<li>
			<a class="nav_menu nav-link" href="#advantages">Преимущества</a>
		</li>	
		<li>
			<a class="nav_menu nav-link" href="#application">Оставить заявку</a>
		</li>
		<li>
			<a class="nav_menu nav-link" href="tel:+77071076622"><img style="height: 40px;margin-top: -8px;" src="img/iconfinder_icon-ios7-telephone_211830.png">+77071076622</a>
		</li>	
	</ul>	
</nav>
<!---->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div style="height: 660px;" class="carousel-inner">
    	  <h1 class="too">ТОО «Сергали Лифт»</h1>
    	  <h2>обслуживание лифтового оборудования</h2>  	
    <div class="carousel-item active">
      <img style="height: 660px;" src="img/elit1.jpg" class="d-block w-100" alt="...">
    </div>
  	<?php foreach($photos as $photo):?>    
    <div class="carousel-item">
		<img style="height: 660px;width: 100%;" src="img/<?php echo $photo['photo']; ?>" alt="">									   
    </div>
  	<?php endforeach;?>    
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!---->
<div class="card text-center about">
  <div class="card-header">
    <h1 class="card-title" id="about">О компании</h1>
  </div>
  <div class="card-body">



<div style="height: 280px;" class="card-deck">
  <div class="card">
    <img style="height: 281px;" src="img/elevator1.jpg" class="card-img-top" alt="...">
  </div>
  <div class="card">
    <div class="card-body">
      <h6 class="card-title">ТОО «Сергали Лифт» — это 
профессиональное обслуживание лифтового оборудования для среднего и крупного бизнеса, некоммерческих и государственных предприятий. 
У которой имеется богатый опыт работы по монтажу, модернизации, обслуживанию лифтов, 
эскалаторов и подъемников.</h6>
    </div>
  </div>
  <div class="card">
    <img style="height: 281px;" src="img/shahta.jpg" class="card-img-top" alt="...">
  </div>  
</div>

  </div>
  <div class="card-footer text-muted">

  </div>
</div>



<div class="card text-center services">
  <div class="card-header">
    <h1 class="card-title" id="services">НАШИ УСЛУГИ</h1>
  </div>
  <div class="card-body">
    <p class="card-text">Все работы выполняются в соответствие с требованиями «Правилам обеспечения промышленной безопасности при эксплуатации грузоподъемных механизмов».</p>


<div style="height: 430px;" class="card-deck">
  <div class="card">
    <img src="img/w1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Монтаж и пусконаладочные работы</h5>
    </div>
  </div>
  <div class="card">
    <img src="img/w2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Техническое освидетельствование</h5>
    </div>
  </div>
  <div class="card">
    <img src="img/w3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Техническое обслуживание лифтового и эскалаторного оборудования</h5>
    </div>
  </div>
  <div class="card">
    <img src="img/w4.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ремонт и модернизация лифтов</h5>
    </div>
  </div>  
</div>
  </div>
  <div class="card-footer text-muted"></div>
</div>

<!---->
<div class="card text-center advantages">
  <div class="card-header">
    <h1 class="card-title" id="advantages">ПРЕИМУЩЕСТВА</h1>
  </div>
  <div class="card-body">

<div style="height: 220px;" class="card-deck">
  <div class="card">
    <div class="card-body">
    	<h3>Профессиональное обслуживание</h3>
      <h5 class="card-title">Вас обслужат мастера высокой квалификации, которые прошли специальную подготовку и имеют сертификат</h5>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
    	<h3>Предлагаем все виды услуг</h3>
      <h5 class="card-title">Богатый опыт по монтажу, модернизации, и обслуживанию лифтов, эскалаторов и подъемников</h5>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
    	<h3>Разумная и доступная цена</h3>
      <h5 class="card-title">Наши цены Вас приятно удивят. Мы предоставляем услуги по доступным ценам для каждого</h5>
    </div>
  </div>

</div>

  </div>
  <div class="card-footer text-muted">

  </div>
</div>

<!---->
<div class="card text-center">
  <div class="card-header">
	<h1 id="application" class="card-title">Оставить заявку</h1>
  </div>

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

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form action="store.php" method="POST">
					<div class="form-group">
						<input style="margin-top: 20px;" type="text" name="name" class="form-control" placeholder="Введите Имя">
						<input style="margin-top: 10px;" type="text" name="number" class="form-control" placeholder="Введите номер">			
						<textarea style="margin-top: 10px;" name="message" class="form-control" placeholder="Введите сообщение" cols="20" rows="5"></textarea><br>					
					</div>
					<div class="form-group">
						<button class="btn btn-success" name="sent">Отправить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
  </div>
  <div class="card-footer text-muted"></div>
</div>
<!---->

<!---->
<nav class="nav">

<div style="height: 110px;" class="card-deck">
  <div style="border: none;" class="card">
    <div class="card-body">
    	<a class="navbar-brand" href="#"><img style="height: 95px;width: 160px;margin-left: 40px;" src="img/Main.h1.gif" alt=""></a>
    </div>
  </div>

  <div style="border: none;height: 105px;" class="card contein">
    <div class="card-body">
    	<ul class="nav flex-column">
  <li style="margin-bottom: -15px;margin-top: -20px;" class="nav-item">
    <h4 class="nav-link active disabled">Контакты</h4>
  </li>
  <?php foreach($all_numbers as $number):?>     
      <li style="margin-bottom: -30px;" class="nav-item">
    <p class="nav-link disabled"><?php echo $number['number']; ?></p>
  </li>
  <?php endforeach;?> 

  <?php foreach($emails as $email):?> 
  <li style="margin-bottom: -17px;" class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php echo $email['email']; ?></a>
  </li>
  <?php endforeach;?>  
      </ul>
  </div>
</div>

  <div style="border: none;height: 105px;" class="card contein">
    <div class="card-body">
    	<ul class="nav flex-column">
  <?php foreach($address as $row):?>          
  <li style="margin-bottom: -25px;margin-top: -20px;" class="nav-item">
    <h4 class="nav-link active disabled">Адрес</h4>
  </li>
  <li style="margin-bottom: -33px;" class="nav-item">
    <p class="nav-link disabled">г.<?php echo $row['city']; ?>,</p>
  </li>
  <li style="margin-bottom: -33px;" class="nav-item">
    <p class="nav-link disabled">ул. <?php echo $row['street']; ?></p>
  </li>  
  <li style="margin-bottom: -33px;" class="nav-item">
    <p class="nav-link disabled">БЦ «<?php echo $row['bc']; ?>»,</p>
  </li>
  <li style="margin-bottom: -33px;" class="nav-item">
    <p class="nav-link disabled">каб. <?php echo $row['cab']; ?></p>
  </li> 
  <?php endforeach;?>    
</ul>
    </div>
  </div>
</div>
</nav>

</body>
</html>
