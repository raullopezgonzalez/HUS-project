<?php
$conn = mysqli_connect('localhost', 'root', 'husraul', 'hus_testing_01');

$Id_patient = $_POST['Id_patient'];

$sql="SELECT Date FROM test WHERE Id_patient = '$Id_patient'";

$Sel = mysqli_query($conn,"SELECT Date FROM test WHERE Id_patient = '$Id_patient'");


while ($row = mysqli_fetch_array($Sel)) {
	echo $row[0];
	echo "\t";
}
?>