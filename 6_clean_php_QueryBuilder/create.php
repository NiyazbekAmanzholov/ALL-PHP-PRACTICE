<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<title>Create Post</title>
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<form action="/store.php" method="POST">
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" class="form-control">
						</div>

						<div class="form-group">
							<button class="btn btn-success">Add post</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>