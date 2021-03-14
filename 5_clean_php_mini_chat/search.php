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

                                        <?php 
                                        $search = comments_by_search($_GET["search"]);
                                        foreach ($search as $comment): ?>

                                        <div class="media">
                                        <img src="<?php echo get_image($comment) ?>" class="mr-3" alt="..." width="64" height="64">
                                        <div class="media-body">
                                        <h5 class="mt-0"><a href="profile.php?id=<?php echo $comment['id']; ?>"><?php echo $comment['name']; ?></a></h5>
                                        <span><small><?php echo $comment['date']; ?></small></span>
                                        <a href="page.php?id=<?php echo $comment['com_auto_id']; ?>"><p><?php echo $string = substr($comment['comment'], 0, 80); ?></p></a>
                                        </div>
                                        <span class="views"><?php echo $comment['views']; ?>Просмотра</span>                                          
                                        </div>
                                        <?php endforeach; ?>

                                     </div>
                                </div>                     
                            </div>
        
                <?php if(!empty($_SESSION['auth'])){ ?><!--Если пользователь не зарегистрирован прячем поле-->

                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-header"><h3>Оставить комментарий</h3></div>

                            <div class="card-body">
                                <form action="db.php" method="post">
                                    <div class="form-group">
                                    <!--<label for="exampleFormControlTextarea1">Имя</label>-->
                                    
                                    <?php 
                                    $id = get_user_id();
                                    foreach ($id as $user_id): ?>
                                    <input type="hidden" name="userID" class="form-control" id="exampleFormControlTextarea1" value="<?php echo $user_id['id']; ?>" />
                                    <?php endforeach; ?>

                                    <input type="hidden" name="name" class="form-control" id="exampleFormControlTextarea1" value="<?php echo $_SESSION['username']; ?>" />
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
