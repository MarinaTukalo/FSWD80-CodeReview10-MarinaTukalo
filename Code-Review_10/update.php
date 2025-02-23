<?php 

	require_once "connect.php";

	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$sql = "SELECT * FROM media WHERE id = $id ";

		$result = mysqli_query($conn ,$sql);

		$row = $result->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Your Big Library - UPDATE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <!-- style -->
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- google-fonts -->
  <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pontano+Sans&display=swap" rel="stylesheet">
  </head>

<body>
	<!-- navbar --->
   	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
   		<a class="navbar-brand pl-5 my-3" href="index.php">Your Big Library</a>
   		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   		<span class="navbar-toggler-icon"></span>
   		</button>
   		<div class="collapse navbar-collapse" id="navbarNav">
   			<ul class="navbar-nav">
   				<li class="nav-item active pl-5">
       				<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item pl-5">
        			<a class="nav-link" href="#">About us</a>
      			</li>
      			<li class="nav-item pl-5">
        			<a class="nav-link" href="#">Contact</a>
      			</li>
   			</ul>
   		</div> 		
   	</nav>
   	<!-- form for update -->
   	<div class="container mt-5 pt-5">
	<form action="update_a.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<p>ISBN: <input type="number" name="ISBN" value="<?php echo $row['ISBN'] ?>"></p>
		<p>Fullname of the Author: <input type="text" name="author_fullname" value="<?php echo $row['author_fullname'] ?>"></p>
		<p>Title: <input type="text" name="title" value="<?php echo $row['title'] ?>"></p>
		<p>Image: <input type="text" placeholder="URL" name="image" value="<?php echo $row['image'] ?>"></p>
		<p>Short description: <input type="text" id="textarea" name="short_description" value="<?php echo $row['short_description'] ?>"></p>
		<p>Publishing date: <input type="date" name="publish_date" value="<?php echo $row['publish_date'] ?>"></p>
		<p>Publisher: <input type="text" name="publisher" value="<?php echo $row['publisher'] ?>"></p>
		<p>Type: <select type="text" name="type" value="<?php echo $row['type'] ?>">
			<option value="<?php echo $row['type'][0] ?>">Book</option>
			<option value="<?php echo $row['type'][1] ?>">CD</option>
			<option value="<?php echo $row['type'][2] ?>">DVD</option></select></p>
		<p>Status: <select type="text" name="status" value="<?php echo $row['status'] ?>">
			<option value="<?php echo $row['status'][0] ?>">Available</option>
			<option value="<?php echo $row['status'][1] ?>">Reserved</option></select></p>

		<input type="submit" name="submit" value="update">
	</form>
	</div>
	<!-- jQuery,Popper,Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>