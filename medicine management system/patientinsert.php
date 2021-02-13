<?php
    require('connection.php');
	$pname = $_POST['pname'];
	$db = $_POST['date'];
	$gender = $_POST['gender'];
	$p_id = $_POST['p_id'];
	$house = $_POST['house'];
	$road = $_POST['road'];
	$area = $_POST['area'];
	$city = $_POST['city'];
	$p_diseases = $_POST['p_diseases'];
	$pressure = $_POST['pressure'];
	$heartbeat = $_POST['heartbeat'];
	$temperature = $_POST['temp'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$fhistory = $_POST['history'];
	$p_id0 = $_POST['p_id0'];
	$symptoms = $_POST['symptoms'];
	$p_id1 = $_POST['p_id1'];
	$p_id2 = $_POST['p_id2'];
	$d_id = $_POST ['d_id'];
	
	if ($pname!=null && $db!=null && $gender!=null && $p_id!=null && $house!=null && $road!=null && $area!=null && $city!=null && $p_diseases!=null && $pressure!=null && $heartbeat!=null && $temperature!=null && $weight!=null && $height!=null && $fhistory!=null && $p_id0!=null && $symptoms!=null && $p_id1!=null && $p_id2!=null && $d_id!=null)
	{
		$query1 = "INSERT INTO patient (PName,Date_of_Birth,Gender,Patient_ID,House,Road,Area,City) VALUES ('".$pname."', '".$db."', '".$gender."', '".$p_id."', '".$house."', '".$road."', '".$area."', '".$city."')";
		
		$query2 = "INSERT INTO patient_history (Past_diseases,Pressure,Heartbeat,Temperature_in_celsius,Weight_in_kg,Height_in_feet,Family_History,Patient_ID) VALUES ('".$p_diseases."', '".$pressure."', '".$heartbeat."', '".$temperature."', '".$weight."', '".$height."', '".$fhistory."', '".$p_id0."')";
		
		$query3 = "INSERT INTO symptoms_1 (Symptoms,Patient_ID) VALUES ('".$symptoms."', '".$p_id1."')";
		
		$query4 = "INSERT INTO consults (Patient_ID,Doctor_ID) VALUES ('".$p_id2."', '".$d_id."')";
		
		if ($conn->query($query1) === TRUE && $conn->query($query2) === TRUE && $conn->query($query3) === TRUE && $conn->query($query4) === TRUE)
		{
			echo "\r\n New record created successfully \r\n";
		}
		else
		{	
			echo "Error:" . mysqli_error($conn);
		}
	}
	else
	{
		echo "Proper input not given";
	}
	
?>