<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comments</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/shop-script.js"></script>
    <script src="js/jquery.cookie.min.js"></script> 
    <script src="trackbar/jquery.trackbar.js"></script>
    <script src="js/jcarousellite_1.0.1.js"></script>   


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="./index.php">
                    Project
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                <form action="search.php" method="GET">
                    <input style="width: 200px;border-radius: 5px;padding-left: 5px;" type="text" name="search" placeholder="Поиск по комментарию">
                    <button type="submit" style="border-radius: 5px;">search</button>
                </form>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul style="cursor: pointer;" class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
    
                            <?php if(!empty($_SESSION['auth'])){ ?><!-- если пользователь авторизирован выводим имя пользователя и выход -->

                            <li style="display: flex;" class="nav-item" id="index1">
                            <?php 
                            $data = get_users_table();
                            foreach ($data as $name): ?>

                            <img style="height: 30px;width: 30px;margin-top: -7px;border-radius: 100px;" src="<?php echo get_image($name) ?>" class="mr-3" alt="..." width="64" height="64"> 

                            <h5 class="mt-0"><?php echo $name['name']; ?><img style="margin-bottom: 5px;margin-left: 10px;" src="img/icon.png" alt=""></h5>
                            <?php endforeach; ?>
                        
                            </li>
                            <li style="border-radius:5px;margin-left:4px;background:white;position:absolute;z-index:1;height: 80px;width: 115px;margin-top: 44px;border: 1px solid #C3C4C3;" id="category-section1">
                                <a style="margin-left: 25px;" href="profile.php">Профиль</a>
                                <a style="margin-left: 5px;" href="admin.php">Администратор</a>
                                <a style="margin-left: 30px;color: red;" href="logout.php">Выход</a>
                            </li>
                            <?php }else{

                            echo '                            
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Register</a>
                            </li>';

                            } ?>  
                    </ul>
                </div>
            </div>
        </nav>
