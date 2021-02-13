<?php
	include_once "connection.php";

	$sql = "SELECT * FROM patient,doctor,consults where patient.patient_id=consults.patient_id and doctor.doctor_id=consults.doctor_id";
	$result = $conn->query($sql);
	if ($result->num_rows> 0) {
		while ($row=$result->fetch_assoc()) {
			echo "  Name:  " . $row['PName']."  Date_of_Birth:  " . $row['Date_of_Birth']."  Gender:  " . $row['Gender']."  Patient_ID:  " . $row['Patient_ID']."  House:  " . $row['House']."  Road:  " . $row['Road']."  Area:  " . $row['Area']."  City:  " . $row['City']. " Doctor Name: ". $row ['DName'].    "<br>";
			
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>