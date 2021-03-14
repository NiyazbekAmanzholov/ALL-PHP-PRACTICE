<?php require 'db.php';  
if(!empty($_SESSION['auth'])){ 
include('block_header.php');
?>

<?php if (isset($_SESSION['msg_success'])): ?>                                
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['msg_success']; unset ($_SESSION['msg_success']);?>
    </div>
<?php endif ?> 

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h3>Админ панель</h3></div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Аватар</th>
                                            <th>Имя</th>
                                            <th>Дата</th>
                                            <th>Комментарий</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                        <?php 
                                        $admins = get_admin();
                                        foreach ($admins as $admin): ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo get_image($admin) ?>" class="mr-3" alt="..." width="64" height="64">
                                            </td>
                                            <td><?php echo $admin['name']; ?></td>
                                            <td><?php echo $admin['date']; ?></td>
                                            <td><?php echo $admin['comment']; ?></td>
                                            <td>
                                            <a href="db.php?visible=<?php echo $admin['com_auto_id']; ?>" class="btn btn-success">Разрешить</a>
                                            <a href="db.php?ban=<?php echo $admin['com_auto_id']; ?>" class="btn btn-warning">Запретить</a>

                                            <a  href="db.php?delete=<?php echo $admin['com_auto_id'];?>" onclick="return confirm('are you sure?')" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                         
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<!--Если пользователь не авторизован перекинет на login.php-->
<?php }else{
    header('location:login.php');
 }?>