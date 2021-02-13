<!doctype html>
<?php
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user=="receptionist" && $pass=="receptor"){
		header('Location:receptionist.php');
	}else{
	header('Location:receptionistlogin.php');
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>Receptionist</title>
<nav class ="bannernav">
<h1 style="color:white" > Medicine Management System</h1>
</nav>
<br>

<body>
<center><h2>Receptionist Login</h1></center>
<form action="" method="post">
		<h3>Username:<input type="text" name="username" placeholder="username">
		<h3>Password:<input type="password" name ="password" placeholder="password">
		<center><input class="button" type="submit" name="submit" value="Submit"></center>

</form>
</head>	
</body>
</html>