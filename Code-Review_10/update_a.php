<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Your Big Library - UPDATE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
   	<!-- update -->
   	<div class="container mt-5 pt-5">
 <?php 
require_once "connect.php";

if(isset($_POST)){
	$ISBN = $_POST['ISBN'];
  $author_fullname = $_POST['author_fullname'];
  $title = $_POST['title'];
  $image = $_POST['image'];
  $short_description = $_POST['short_description'];
    // $type = $_POST['type'];
    // $status = $_POST['status'];
  $publish_date = $_POST['publish_date'];
  $publisher = $_POST['publisher'];

  $id = $_POST['id'];

	$sql = "UPDATE `media` SET `ISBN`='$ISBN',`author_fullname`='$author_fullname',`title`= '$title',`image`='$image',`short_description`='$short_description',`publish_date`='$publish_date',`publisher`='$publisher' WHERE id = $id";

	if(mysqli_query($conn, $sql)){
		echo '<p>Updated successfully</p><a href="index.php"><p>Back to Home-page</p></a>';
	}
}
 
?>
</div>
</body>
</html>