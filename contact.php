<?php 
  //1. Create database connection
  $dbhost = "66.147.242.186";  
  $dbuser = "urcscon3_juneau";  
  $dbpass = "coffee1N"; 
  $dbname = "urcscon3_juneau";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$name = Trim(stripcslashes($_POST["name"]));
$email = Trim(stripcslashes($_POST["email"]));
$message = Trim(stripcslashes($_POST["message"]));
  //2. Perform database query
  $query = "INSERT INTO student (Name, Email, Message) VALUES ('$name','$email','$message')";
  $result = mysqli_query($connection, $query); 

  
?>
<!DOCTYPE html>
<html lang="en">

  <meta charset="utf-8">
<head>
  <title>Hello</title>
</head>
  <body>
		 
      Success!
      The student
      <?php echo $_POST["name"]; ?>
     has been successfully added!
 </body>
</html>

<?php
  mysqli_close($connection);
?>
