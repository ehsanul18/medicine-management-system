<html>
<head>
    <title>Patient Information</title>
	<link rel="stylesheet" href="style.css">
<nav class ="bannernav">
<h1 style="color:white" > Medicine Management System</h1>
</nav>
<br>
<body>
	<h2><center><u>Patient Information</u></center></h2>
	<form action="patientinsert.php" method="post">
	<h3><center>Insert Patient Information</center></h3>
	<h4><center>Name<input type='text' name='pname'>Date of Birth<input type='text' name='date'>Gender<input type='text' name='gender'>Patient ID<input type='text' name='p_id'>House<input type='text' name='house'>Road<input type='text' name='road'>Area<input type='text' name='area'>City<input type='text' name='city'></center><br>
	<h3><center>Patient History</center></h3>
	<h4><center>Past Diseases<input type='text' name='p_diseases'>Pressure<input type='text' name='pressure'>Heartbeat<input type='text' name='heartbeat'>Temperature<input type='text' name='temp'>Weight<input type='text' name='weight'>Height<input type='text' name='height'>Family History Disease<input type='text' name='history'>Patient ID<input type='text' name='p_id0'></center><br>
	<h3><center>Known Symptoms</center></h3>
	<h4><center>Symptoms<input type='text' name='symptoms'>Patient ID<input type='text' name='p_id1'></center><br>
	<h3><center>Recommended Doctor</center></h3>
	<h4><center>Patient ID<input type='text' name='p_id2'>Doctor ID<input type='text' name='d_id'></center><br>
	<center><input class="button" type="submit" name="submit1" value="Insert"/></center>
	
	<center><a href="view1.php" style="margin-left:20px">View Patient Table</a></center>
</head>
</body> 
</html>