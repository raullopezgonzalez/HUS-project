<?php
$conn = mysqli_connect('localhost', 'root', 'husraul', 'hus_testing_01');

$Id_patient=$_POST['Id_patient'];
$Date=$_POST['Date'];

$sql="SELECT * FROM test WHERE Id_patient = '$Id_patient' AND Date = '$Date'";

$Sel = mysqli_query($conn,"SELECT * FROM test WHERE Id_patient = '$Id_patient' AND Date = '$Date'");

while ($row = mysqli_fetch_assoc($Sel)) {
	echo json_encode($row); 
}	
?>