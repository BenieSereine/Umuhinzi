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
<div class="container">
<h1>Know the kind of crops to cultivate basing on where you are located.</h1>
</div>
<div>
<a href="#" style="color:white;">Kigali</a>
<a href="#" style="color:white;">Musanze</a>
<a href="#" style="color:white;">Muhanga</a>
<a href="#" style="color:white;">Rwamagana</a>
<a href="#" style="color:white;">Gicumbi</a>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>