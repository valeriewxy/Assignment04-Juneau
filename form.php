<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Assignment 04</title>
		<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
		 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
		<link rel="stylesheet" type ="text/css" href="css/contact.css">
		<link rel="stylesheet" type ="text/css" href="css/animate.css">
		<link rel="stylesheet" type ="text/css" href="css/override.css">

		<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>

	<body>

		<?php $active='form'?> 
		<?php include 'inc/navigation.inc' ?>

		<div class="mainPageLanding">

  		<div class="video-bg-container">

  			<video autoplay muted loop id="myVideo">
  	  		<source src="images/Very-Open-Space.webm" type="video/webm">
  			</video>

  		</div>

      <div class="mainPageOverlay">
		<div class="animated fadeIn">
			<div class="container">
			<div class="headcontainer">
					<h1>Contact Us</h1>
					<span>Looking forward to hearing from you!</span>
		    </div>
					<form method="post" action="contact.php">
						<div>
							<label for ="name">Name:</label><br>
							<input type="text" name="name" id="name">
						</div>
						<div>
							<label for ="email">E-mail:</label><br>
							<input type="text" name="email" id="email">
						</div>
						<div>
							<label for ="message">Message</label><br>
							<textarea type="text" rows="5" cols="50" name="message"></textarea>
						</div>
						<div>
							<input type="submit">
						</div>
					</form>
			  </div>
      </div>
    </div>
    </div>

		
		<footer class="footer">
		  <span class="text-muted">Page created by Team Juneau</span>
		</footer>
	</body>
	
</html>
