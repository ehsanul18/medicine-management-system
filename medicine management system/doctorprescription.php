<?php
require('G:\fpdf181\fpdf.php');
require ('connection1.php');
class PDF extends FPDF
{
//Page header
function Header()
{
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Move to the right
    $this->Cell(80);
    //Title
    $this->Cell(30,10,'Prescription Slip',0,2,'C');
	$this->SetFont('Arial','',12);
	$this->Cell(30,10,'Medicare Hospital',0,2,'C');
	$this->SetFont('Arial','',10);
    $this->Cell(30,10,'14, Mohakhali, Dhaka',0,2,'C');
	$this->SetFont('Arial','',9);
	$this->Cell(30,10,'Telephone:(+880)9344123',0,2,'C');
    $this->Ln(10);
}
 
//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
//Instanciation of inherited class
	$dusername=$_POST['holdname'];
	$diagnosis=$_POST['diagnosis'];
	$name=$_POST['pname'];
	$doc_id="SELECT * FROM doctor_1 where Dusername=('$dusername')";
	$patient_id="SELECT * FROM patient where Pname=('$name')";
	$result = $conn1->query($doc_id);
	while ($row=$result->fetch_assoc()) 
	{	
		foreach($_POST['trademark_name'] as $select)
		{
			$medicine1="SELECT * FROM medicine where Trademark_Name=('$select')";
			$result1=$conn1->query($medicine1);
			while ($row1=$result1->fetch_assoc())
			{
				$query1="INSERT INTO prescribes (Medicine_ID,Doctor_ID) VALUES ('".$row1['Medicine_ID']."','".$row['Doctor_ID']."')";
				if ($conn1->query($query1) === TRUE )
				{
					echo "\r\n New record created successfully \r\n";
				}
				else
				{	
				echo "Error:" . mysqli_error($conn1);
				}
			}
		}
	}
	$result2 = $conn1->query($doc_id);
	while ($row2=$result2->fetch_assoc())
	{
		foreach($_POST['tname'] as $select1)
		{
			$test="Select * from test where TName=('$select1')";
			$result3=$conn1->query($test);
			while ($row3=$result3->fetch_assoc())
			{
				$query2="INSERT INTO orders (Test_ID,Doctor_ID) VALUES ('".$row3['Test_ID']."', '".$row2['Doctor_ID']."')";
				if ($conn1->query($query2) === TRUE )
				{
					echo "\r\n New record created successfully \r\n";
				}
				else
				{	
					echo "Error:" . mysqli_error($conn1);
				}
			}
		}
	}
	$result4 = $conn1->query($patient_id);
	while ($row4=$result4->fetch_assoc())
	{
		$query3="INSERT INTO diagnosis1 (Patient_ID,Diagnosis) VALUES ('".$row4['Patient_ID']."','".$diagnosis."')";
		if ($conn1->query($query3) === TRUE )
		{
			echo "\r\n New record created successfully \r\n";
		}
		else
		{	
			echo "Error:" . mysqli_error($conn1);
		}
	}
	$pdf=new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);
	$query="SELECT * from patient,symptoms_1 where patient.patient_id=symptoms_1.patient_id and pname=('$name')";
    $pdf->Cell(0,10,'Name: '.$name,0,1);
	$result = $conn1->query($query);
	while ($row=$result->fetch_assoc()) {
		$pdf->Cell(0,10, 'Symtoms: ' . $row['Symptoms'],0,1);
		}
	$pdf->Cell(0,10, 'Diagnosis: ' .$diagnosis,0,1);
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,'Advised medicine: ',0,1);
	$pdf->SetFont('Times','',11);
	foreach($_POST['trademark_name'] as $select)
	{
		$pdf->Cell(0,10,$select,0,1);		
	}
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,'Recommended Tests: ',0,1);
	$pdf->SetFont('Times','',11);
	foreach($_POST['tname'] as $select1)
	{
		$pdf->Cell(0,10,$select1,0,1);		
	}
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,'Comments: ',0,1);
	$comments=$_POST['comments'];
	$pdf->SetFont('Times','',11);
	$pdf->MultiCell(0,10,$comments,0,1);
$pdf->Output();
?>