<?php
	include_once "connection.php";

	$sql = "SELECT * FROM medicine order by medicine_id";
	$result = $conn->query($sql);

	if ($result->num_rows> 0) {
		while ($row=$result->fetch_assoc()) {
			echo "  Generic Name:  " . $row['Generic_Name']."  Trademark Name:  " . $row['Trademark_Name']."  Variation:  " . $row['Variation']."  Medicine ID:  " . $row['Medicine_ID']."  Quantity:  " . $row['Quantity']. "<br>";
			
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>