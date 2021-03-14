<?php require 'db.php';  
include('block_header.php');
?>
          <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h3>Комментарии</h3></div>

                            <div class="card-body">

<?php if (isset($_SESSION['msg_success'])): ?>                                
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['msg_success']; unset ($_SESSION['msg_success']);?>
    </div>
<?php endif ?> 

<?php if (isset($_SESSION['msg_error'])): ?>                                
    <div style="color: red;" class="alert alert-success" role="alert">
        <?php echo $_SESSION['msg_error']; unset ($_SESSION['msg_error']);?>
    </div>
<?php endif ?> 

                                <?php 
                                $comments = get_comments();
                                foreach ($comments as $comment): ?>
                                <div class="media">

                                <img src="<?php echo get_image($comment) ?>" class="mr-3" alt="..." width="64" height="64">

                                <div class="media-body">
                                <h5 class="mt-0"><?php echo $comment['name']; ?></h5>

<?php if(!empty($_SESSION['auth'])){ ?><!--Если пользователь не зарегистрирован прячем поле-->
                                <div style="display: flex;">
                                <p style="margin-right: 5px;"><?php echo $comment['like_com']; ?></p>                                      
                                <!--like-->
                                <form action="db.php" method="POST">
                                 <input type="hidden" name="like_id" class="form-control" id="exampleFormControlTextarea1" value="<?php echo $comment['com_auto_id']; ?>" />   
                                <button style="border-radius: 10px;" type="submit" name="like_enter">like</button>
                                </form>
                                <!--end-like-->
                                </div>
<?php } ?>  

                                    <span><small><?php echo date("d.m.Y B H:i", strtotime($comment['date'])); ?></small></span>
                                    <a href="page.php?id=<?php echo $comment['com_auto_id']; ?>"><p><?php echo $string = substr($comment['comment'], 0, 80); ?></p></a>
                                </div>
                                    <span class="views"><img style="margin-right: 5px;margin-top: -5px;" src="img/eye-icon.png" alt=""><?php echo $comment['views']; ?></span>                                  
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div> 

                <?php if(empty($_SESSION['auth'])){ ?>
                <div style="background: #3AE2CE;border-radius: 5px;width: 97.5%;margin-top: 20px;" class="alert alert-success" role="alert">
                <p>Чтобы оставить комментарий<a href="login.php"> авторизуйтесь</a></p>
                </div>
                <?php } ?>  

                <?php if(!empty($_SESSION['auth'])){ ?><!--Если пользователь не зарегистрирован прячем поле-->

                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-header"><h3>Оставить комментарий</h3></div>

                            <div class="card-body">
                                <form action="db.php" method="post">
                                    <div class="form-group">
                                    <!--<label for="exampleFormControlTextarea1">Имя</label>-->
                                    
                                    <?php 
                                    $data = get_users_table();
                                    foreach ($data as $user_id): ?>
                                    <input type="text" name="userID" class="form-control" id="exampleFormControlTextarea1" value="<?php echo $user_id['id']; ?>" />
                                    <?php endforeach; ?>

                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Сообщение</label>
                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-success">Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>  
            </div>
        </main>
    </div>
</body>
</html>
