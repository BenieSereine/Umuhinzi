<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body style="background-color: #263859;">
     <div style="background-color: white; text-align: center;border-radius: 5px;margin-right: 100px; margin-left: 100px;">
<h1 >Welcome to Umuhinzi system</h1>
</div>
<div class="title"> 
    <h3 style="padding-left: 10px;"><a style="float: right;text-decoration: none;padding-right: 10px;padding-top:-100px;color: white;" href="logout.php">Log out</a> </h3>
</div>
<div class="container" style="padding-top: 50px;" >
<a href="index.html" class="box" style="background-color: orange;border-radius: 5px;">
CHECK WEATHER
</a>
<a href="crops.php" class="box" style="background-color: lightblue;border-radius: 5px;">
  CROPS
</a>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>