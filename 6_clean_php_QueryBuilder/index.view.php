
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>	</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">MainPage</li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<a href="#" class="btn btn-success">Add Post</a>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Title</th>
			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach($posts as $post): ?>
				    <tr>
				      <th scope="row"><?php echo $post['id']; ?></th>
				      <td><a href="/show.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></td>
				      <td>
				      	<a href="/edit.php?id=<?php echo $post['id']; ?>" class="btn btn-warning">Edit</a>
				      	<a href="/delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a>			      	
				      </td>
				    </tr>
				<?php endforeach; ?>
			  </tbody>
			</table>			
		</div>
	</div>
</div>



</body>
</html>