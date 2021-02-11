<?php
$conn = mysqli_connect('localhost', 'root', 'husraul', 'hus_testing_01');


$variable = $_POST['variable'];
$valor = $_POST['valor'];
$simbolo = $_POST['simbolo'];


$Sel = mysqli_query($conn,"SELECT Id_patient FROM test WHERE $variable $simbolo '$valor'");
$count = 0;

while ($row = mysqli_fetch_array($Sel)) {
	if ($count++ > 0) echo ",   ";
	echo $row[0];
	
}
?>