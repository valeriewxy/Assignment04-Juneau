<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Assignment 04</title>
		<link rel="stylesheet" type ="text/css" href="css/override.css">
	  	<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
		<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>

	<body>

		<?php $active='form';?>
		<?php include 'inc/navigation.inc';?>

		<div class="container">
			<h1>Contact Us</h1>
			<span>Looking forward to hearing from you!</span>
			<form method="post" action="welcome.php">
				<div>
					<label for ="name">Name</label><br>
					<input type="text" name="name" id="name">
				</div>
				<div>
					<label for ="email">E-mail</label><br>
					<input type="email" name="email" id="email">
				</div>
				<div>
					<label for ="message">Message</label><br>
					<textarea rows="5", cols="50"></textarea>
				</div>
				<div>
					<input type="submit">
				</div>
			</form>
		</div>
		<footer class="footer">
		  <span class="text-muted">Page created by Team Juneau</span>
		</footer>
	</body>
	
</html>
