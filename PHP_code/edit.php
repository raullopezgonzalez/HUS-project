<?php
$conn = mysqli_connect('localhost', 'root', 'husraul', 'hus_testing_01');

$Id_patient=$_POST['Id_patient'];
$Date=$_POST['Date'];


$Nivel_de_amputacion=$_POST['Nivel_de_amputacion'];
$Deambulacion_previa=$_POST['Deambulacion_previa'];
$Independiente_o_no=$_POST['Independiente_o_no'];
$Vive_solo=$_POST['Vive_solo'];
$Ascensor=$_POST['Ascensor'];
$Alteraciones_de_la_vision=$_POST['Alteraciones_de_la_vision'];
$Deterioro_cognitivo=$_POST['Deterioro_cognitivo'];
$Estado_general_del_paciente=$_POST['Estado_general_del_paciente'];
$Grado_de_colaboracion=$_POST['Grado_de_colaboracion'];
$M_S_Deformidades=$_POST['M_S_Deformidades'];
$M_S_Rango_articular=$_POST['M_S_Rango_articular'];
$M_S_Balance_muscular=$_POST['M_S_Balance_muscular'];
$M_S_Manos=$_POST['M_S_Manos'];
$M_I_No_Funcionalidad=$_POST['M_I_No_Funcionalidad'];
$M_I_No_Presencia_de_flexos=$_POST['M_I_No_Presencia_de_flexos'];
$M_I_No_Presencia_de_dolor_en_articulaciones_por_artrosis=$_POST['M_I_No_Presencia_de_dolor_en_articulaciones_por_artrosis'];
$M_I_No_Balance_muscular=$_POST['M_I_No_Balance_muscular'];
$M_I_No_Pulsos_arteriales_distales=$_POST['M_I_No_Pulsos_arteriales_distales'];
$M_I_A_Nivel=$_POST['M_I_A_Nivel'];
$M_I_A_Inspeccion=$_POST['M_I_A_Inspeccion'];
$M_I_A_Conformacion_del_munon=$_POST['M_I_A_Conformacion_del_munon'];
$M_I_A_Longitud_transfemoral=$_POST['M_I_A_Longitud_transfemoral'];
$M_I_A_Longitud_Transtibial=$_POST['M_I_A_Longitud_Transtibial'];
$M_I_A_Edema=$_POST['M_I_A_Edema'];
$M_I_A_Presencia_espicula_osea=$_POST['M_I_A_Presencia_espicula_osea'];
$M_I_A_Rasgos_anadibles=$_POST['M_I_A_Rasgos_anadibles'];
$M_I_A_Rango_articular_transfemoral=$_POST['M_I_A_Rango_articular_transfemoral'];
$M_I_A_Rango_articular_transtibial=$_POST['M_I_A_Rango_articular_transtibial'];
$M_I_A_Balance_muscular_transfemoral=$_POST['M_I_A_Balance_muscular_transfemoral'];
$M_I_A_Balance_muscular_transtibial=$_POST['M_I_A_Balance_muscular_transtibial'];
$Miembro_fantasma=$_POST['Miembro_fantasma'];
$Valor_equilibrion_unipodal=$_POST['Valor_equilibrion_unipodal'];



$sql="UPDATE test Set Nivel_de_amputacion='$Nivel_de_amputacion',Deambulacion_previa='$Deambulacion_previa',Independiente_o_no='$Independiente_o_no',Vive_solo='$Vive_solo',Ascensor='$Ascensor',Alteraciones_de_la_vision='$Alteraciones_de_la_vision',
Deterioro_cognitivo='$Deterioro_cognitivo',Estado_general_del_paciente='$Estado_general_del_paciente',Grado_de_colaboracion='$Grado_de_colaboracion',M_S_Deformidades='$M_S_Deformidades',M_S_Rango_articular='$M_S_Rango_articular',M_S_Balance_muscular='$M_S_Balance_muscular',M_S_Manos='$M_S_Manos',
M_I_No_Funcionalidad='$M_I_No_Funcionalidad',M_I_No_Presencia_de_flexos='$M_I_No_Presencia_de_flexos',M_I_No_Presencia_de_dolor_en_articulaciones_por_artrosis='$M_I_No_Presencia_de_dolor_en_articulaciones_por_artrosis',M_I_No_Balance_muscular='$M_I_No_Balance_muscular',M_I_No_Pulsos_arteriales_distales='$M_I_No_Pulsos_arteriales_distales',
M_I_A_Nivel='$M_I_A_Nivel',M_I_A_Inspeccion='$M_I_A_Inspeccion',M_I_A_Conformacion_del_munon='$M_I_A_Conformacion_del_munon',M_I_A_Longitud_transfemoral='$M_I_A_Longitud_transfemoral',M_I_A_Longitud_Transtibial='$M_I_A_Longitud_Transtibial',M_I_A_Edema='$M_I_A_Edema',
M_I_A_Presencia_espicula_osea='$M_I_A_Presencia_espicula_osea',M_I_A_Rasgos_anadibles='$M_I_A_Rasgos_anadibles',M_I_A_Rango_articular_transfemoral='$M_I_A_Rango_articular_transfemoral',M_I_A_Rango_articular_transtibial='$M_I_A_Rango_articular_transtibial',M_I_A_Balance_muscular_transfemoral='$M_I_A_Balance_muscular_transfemoral',
M_I_A_Balance_muscular_transtibial='$M_I_A_Balance_muscular_transtibial',Miembro_fantasma='$Miembro_fantasma',Valor_equilibrion_unipodal='$Valor_equilibrion_unipodal' WHERE Id_patient='$Id_patient' AND  Date='$Date'";



if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}

?>