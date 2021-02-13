<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
	switch($_POST['radio'])
	{
	case 'Doctor':
		header('Location:doctorlogin.php');
	break;
	case 'Pharmacist':	
		header('Location:pharmacistlogin.php');
	break;
	case 'Receptionist':	
		header('Location:receptionistlogin.php');
	break;
	default:
	break;
	}
}
?>

<html>
<body>
<head>
<link rel="stylesheet" href="style.css">

<nav class ="bannernav">
<h1 style="color:white" > Medicine Management System</h1>
</nav>
<br>
<h2><center>Welcome!</center></h1>
<h2><center>Please choose one of the following options:</center></h1>
<form action="" method="post">
<h3><center><input type="radio" name="radio" value="Doctor">Doctor<br></center>
<h3><center><input type="radio" name="radio" value="Pharmacist">Pharmacist<br></center>
<h3><center><input type="radio" name="radio" value="Receptionist">Receptionist<br></center>
<center><input class="button" type="submit" name="submit" value="Submit"></center>
</form>
</head>
</body>
</html>

