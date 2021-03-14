<?php require 'db.php';  
include('block_header.php');
views_update($_GET['id']);//перезагрузка просмотров при входе по определению 
?>

<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Комментарии</h3></div>
                        <div class="card-body"> 

                                        <?php $pages = get_page($_GET['id']);
                                        foreach ($pages as $page): ?>
                                        <div class="media">
                                        <a href="profile.php?profile=<?php echo $page['id']; ?>"><img src="<?php echo get_image($page) ?>" class="mr-3" alt="..." width="64" height="64"></a>
                                        <div class="media-body">
                                        <h5 class="mt-0"><a href="profile.php?profile=<?php echo $page['id']; ?>"><?php echo $page['name']; ?></a></h5>
                                        <span><small><?php echo date("d.m.Y B H:i", strtotime($page['date'])); ?></small></span>
                                        <p><?php echo $page['comment']; ?></p>
                                        </div>
                                        <span class="views"><?php echo $page['views']; ?>Просмотра</span>                                          
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
