<!doctype html>
<?php
require('connection1.php');
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT doctor_id FROM doctor_1 WHERE dusername='$username' and password='$password'";
$result = mysqli_query($conn1, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
	if ($count==1)
	{
		header('Location:dropdown.php? username='.$username);
	}
	else
	{
		header('Location:doctorlogin.php');
	}
	
}

?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>Doctor</title>
<nav class ="bannernav">
<h1 style="color:white" > Medicine Management System</h1>
</nav>
<br>

<body>
<center><h2>Doctor Login</h1></center>
<form action="" method="post">
		<h3>Username:<input type="text" name="username" placeholder="username">
		<h3>Password:<input type="password" name ="password" placeholder="password">
		<center><input class="button" type="submit" name="submit" value="Submit"></center>	
</form>
</head>
</body>
</html>