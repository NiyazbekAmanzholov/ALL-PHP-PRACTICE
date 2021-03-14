<?php require 'db.php';
if(!empty($_SESSION['auth'])){ 
include('block_header.php');
 ?>

        <main class="py-4">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Профиль пользователя</h3></div>
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
                                $data = get_users_table();
                                foreach ($data as $profile): ?>
                            <form action="edit_profile.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Name</label>

                                            <input type="hidden" class="form-control" name="id" value="<?php echo $profile["id"]; ?>">

                                            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="<?php echo $profile["name"]; ?>">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="email" class="form-control is-invalid" name="email" id="exampleFormControlInput1" value="<?php echo $profile["email"]; ?>">
                                            <span class="text text-danger">
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Аватар</label>
                                            <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    
                                    <img src="<?php echo get_image($profile) ?>" alt="" class="img-fluid">
                                    </div>

                                    <div class="col-md-12">
                                        <button name="edit_profile" type="submit" class="btn btn-warning">Edit profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="card">
                        <div class="card-header"><h3>Безопасность</h3></div>

                        <div class="card-body">


                            <form action="edit_profile.php" method="post">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Current password</label>
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $profile["id"]; ?>">                                            
                                            <input type="text" name="current"  value="<?php echo $profile["password"]; ?>" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">New password</label>
                                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Password confirmation</label>
                                            <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput1">
                                        </div>
<?php endforeach; ?>
                                        <button name="edit_password" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
</html>
<?php }else{
    header('location:index.php');
 }?>