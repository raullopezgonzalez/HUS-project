<?php
$conn = new mysqli('localhost', 'root', 'husraul', 'hus_testing_01');


$identificacion_valor = $_POST['identificacion_valor'];
$variable = $_POST['variable'];
$fecha = 'Date';

$sql = "SELECT $variable, Date FROM test WHERE Id_patient = '$identificacion_valor' ORDER BY '$fecha'";

$result= mysqli_query($conn, "SELECT $variable, Date FROM test WHERE Id_patient = '$identificacion_valor' ORDER BY '$fecha'");


$values_array = array();
$values_array_2 = array();

while ($row = $result->fetch_assoc()) {
    $values_array[] = $row[$variable];
	$values_array_2[] = $row[$fecha];
}
$json = json_encode($values_array);
$string = str_replace(array('[',']'), '', $json);
echo $string;
echo ';';
$json_2 = json_encode($values_array_2);
$string_2 = str_replace(array('[',']'), '', $json_2);
echo $string_2;

?>