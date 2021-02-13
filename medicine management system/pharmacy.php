<html>
<head>
    <title>Pharmacy</title>
<link rel="stylesheet" href="style.css">
<nav class ="bannernav">
<h1 style="color:white" > Medicine Management System</h1>
</nav>
<body>
	<h2><center><u>Pharmacy</u></center></h2><br>
	<form action="pharmacyinsert.php" method="post">
	<h3><center>Insert Medicine Information</center></h3>
	<h4 style="line-height:3"><center>Generic Name<input type='text' name='g_name'>Trademark_Name<input type='text' name='t_name'>Variation<input type='text' name='vari'>Medicine_ID<input type='text' name='m_id'>Quantity<input type='number' name='quantity'></center>
	<center><input class ="button" type="submit" name="submit1" value="Insert"/></center>
	</form>
	
	
	<form action="pharmacyupdate.php" method="post">
	<h3><center>Update Medicine Amount<center></h3>
	<h4 style="line-height:2"><center><?php
			require('connection1.php');
		    $query1 = "SELECT trademark_name FROM medicine";
			$result1 = mysqli_query($conn1,$query1);
			echo "Trademark Name";
			echo "<select name='trademark_name'>";
			while ($row = mysqli_fetch_array($result1)) 
			{
				echo "<option value='" . $row['trademark_name'] . "'>" . $row['trademark_name'] . "</option>";	
			}
			echo "</select>";

			?>Quantity<input type='number' name='quantity1'></center>
			
	<center><input class ="button"  type="submit" name="submit2" value="Update"/></center><br>
	</form>
	
	
	<form action="pharmacysale.php" method="post">
	<h3><center>Sales</center></h3>
	<h4 style="line-height:2"><center><?php
			require('connection1.php');
		    $query1 = "SELECT trademark_name FROM medicine";
			$result1 = mysqli_query($conn1,$query1);
			echo "Trademark Name";
			echo "<select name='trademark_name'>";
			while ($row = mysqli_fetch_array($result1)) 
			{
				echo "<option value='" . $row['trademark_name'] . "'>" . $row['trademark_name'] . "</option>";	
			}
			echo "</select>";
			?>Sale<input type='number' name='sale'></center>
	<center><input class ="button"  type="submit" name="submit4" value="Sale"/></center><br>
	</form>
	
	<form action="pharmacydelete.php" method="post">
	<h3><center>Delete Medicine Information</center></h3>
	<h4 style="line-height:2"><center>Medicine_ID<input type='text' name='m_id2'></center>
	<center><input class="button" type="submit" name="submit3" value="Delete"/></center>
	</form>

	

	<center><a href="view.php" style="margin-left:20px">View Medicine Table</a></center>
</head>	
</body> 
</html>