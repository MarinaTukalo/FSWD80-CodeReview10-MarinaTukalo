<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Your Big Library</title>
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
	<header>
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
   </header>

<!-- form with content -->
<div class="container mt-4">
	<h3>Our Medias</h3>
	<a href='create.php'><button class='btn btn-warning' type='button'><p>Create new media data</p></button></a>
</div>
	<ul class="col-8 mt-5 mx-auto list-unstyled">
	<?php 

	require_once "connect.php";

	$sql = "SELECT * FROM media";
	
	$result = mysqli_query($conn, $sql);

	if($result->num_rows == 0){
		$row = "No result";
		$res = 0;
	} elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$res = 1;
	} else{
		$row = $result->fetch_all(MYSQLI_ASSOC);
		$res = 2;
	}

	if($res == 0){
		echo $row;
	}elseif($res == 1){
		echo $row["title"]." ". $row["author_fullname"]. " " .$row["image"];
	}else{
		foreach ($row as $value) {
			echo "<li class='media mt-2'>
			<img class='mr-3' width='140px' src='".$value["image"]."'>
			<div class='media-body'>
      			<h5 class='mt-0 mb-1'>" .$value["title"]."</h5>
      			<p>". $value["author_fullname"]."</p>
      			<p>". $value["short_description"]."</p>
      			<p>Type of media: ". $value["type"]."</p>
      			<p>Status: ". $value["status"]."</p>
      			<p>Published ". $value["publish_date"]." by ". $value["publisher"]."</p>
      			<p>ISBN: ".$value["ISBN"]."</p>
      		<a href='delete.php?id=".$value["id"]."'>delete</a> 
      		<a href='update.php?id=".$value["id"]."'>update</a>
      		<br>
      		</div>
      	</li><br><hr/>";
		}
	}
?>	
	</ul>
	
<!-- jQuery,Popper,Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>