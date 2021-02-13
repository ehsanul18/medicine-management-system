<html>
    <head>
    <title>Doctor Page</title>
    <body bgcolor ="lightblue">
	<link rel="stylesheet" href="style1.css">
<nav class ="bannernav">
<h1 style="color:white" > Medicine Management System</h1>
</nav>
        <form method="post" action="doctorprescription.php">
            <h2>Doctor's Notes : <br>
            <h4>Patient Name
			<?php
			echo "<br>";
            require('connection1.php');
			$username=$_GET['username'];
			$query = "SELECT pname FROM patient,doctor,consults where doctor.doctor_id=consults.doctor_id and patient.patient_id=consults.patient_id and doctor.dusername=('$username')";
			$result = mysqli_query($conn1,$query);

			echo "<select name='pname'>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<option value='" . $row['pname'] . "'>" . $row['pname'] . "</option>";
			}
			echo "</select>";
			
			?>
            <input type="hidden" name="holdname" value="<?php echo"$username"?>"> 
			<br>
			<h4>Diagnosis<br>
			<input type='text' name='diagnosis'><br>
			<h4>Medicine
			<?php
			echo"<br>";
		    $query1 = "SELECT trademark_name FROM medicine where quantity!=0";
			$result1 = mysqli_query($conn1,$query1);

			echo "<select multiple name='trademark_name[]'>";
			while ($row = mysqli_fetch_array($result1)) {
				echo "<option value='" . $row['trademark_name'] . "'>" . $row['trademark_name'] . "</option>";
				
			}
			echo "</select>";

			?>
			<br>
			<h4>Test
			<?php
			echo"<br>";
		    $query2 = "SELECT tname FROM test" ;
			$result2 = mysqli_query($conn1,$query2);

			echo "<select multiple name='tname[]'>";
			while ($row = mysqli_fetch_array($result2)) {
				echo "<option value='" . $row['tname'] . "'>" . $row['tname'] . "</option>";
			}
			echo "</select>";
			?>
			<br>
			<h4>General Comments
			<br><textarea rows="7" cols="50" name="comments"></textarea>
			<br>

            <input class="button" type="submit" name="Submit" value="Select"/>
        </form>
		</head>
    </body>
</html>
