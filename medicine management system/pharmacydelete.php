<?php
    require('connection.php');
    $medicine_id2 = $_POST['m_id2'];
	if ($medicine_id2!=null)
	{
	$query5 = "Delete from pharmacy where Medicine_ID=('".$medicine_id2."')";		
	$query4 = "Delete from prescribes where Medicine_ID=('".$medicine_id2."')";	
	
		if ($conn->query($query5) === TRUE && $conn->query($query4) === TRUE)
		{
			echo "\r\n Record deleted successfully \r\n";
			echo "<br>";
			$query3 = "Delete from medicine where Medicine_ID=('".$medicine_id2."')";
			if ($conn->query($query3) === TRUE)
			{
				echo "\r\n Record deleted from medicine table \r\n";
			}
		}
		else
		{
			echo "Error:" . mysqli_error($conn);
		}
	}
	else
	{
		echo "No input given";
	}
?>