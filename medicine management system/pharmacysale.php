<?php
    require('connection.php');
    $trademark_name = $_POST['trademark_name'];
	$quantity1 = $_POST['sale'];
	if($trademark_name!=null && $quantity1!=null)
	{
		$query2 = "Update medicine set Quantity=Quantity-('".$quantity1."') where Trademark_Name=('".$trademark_name."')";
		if ($conn->query($query2) === TRUE)
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
		echo "No input given";
	}
?>