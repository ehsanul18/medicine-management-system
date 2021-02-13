<?php
    require('connection.php');
	$generic_name = $_POST['g_name'];
	$trademark_name = $_POST['t_name'];
	$variation = $_POST['vari'];
	$medicine_id = $_POST['m_id'];
	$quantity = $_POST['quantity'];
	if ($generic_name!=null && $trademark_name!=null && $variation!=null && $medicine_id!=null && $quantity!=null )
	{
		$query1 = "INSERT INTO medicine (Generic_Name,Trademark_Name,Variation,Medicine_ID,Quantity)
		VALUES ('".$generic_name."', '".$trademark_name."', '".$variation."', '".$medicine_id."', '".$quantity."')";
	
		if ($conn->query($query1) === TRUE  )
		{
			$query2 = "INSERT INTO pharmacy (Medicine_ID) VALUES ('".$medicine_id."')";
			if ($conn->query($query2) === TRUE )
			{
				echo "\r\n New record created successfully \r\n";
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