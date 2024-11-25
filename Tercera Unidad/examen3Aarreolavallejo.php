<?php
/*
cbtis 89
emma gabriela arreola vallejo
3 A Programacion matutino
programa qeu almacena el nombre de cuatro personas por medio de un areglo y en otro arreglo las calificacionesdevcada uno de ellos por medio de filas y columas.
*/

$alumnos= array (luz ,fer, ian, ale);
$calificaciones= array (6,4,5,7,9,8,7,9,8,7,9,5,5,5,6);
$promedio = array ();
$status = array ();

	foreach($calificaciones as $calificaciones){
	if ($promedio<4)$promedio = 0;{
	}
	elseif($promedio >= 4 &&  $promedio<=10){
$promedio=10;
	}
	elseif ($status <=reprobado && $status >=10){
$status=10;
	}
	elseif ($status <=aprobado && $status <=10){
	$status=10;
}


$alumos=($calificaciones*$promedio);
}
echo"CBTIS 89";

echo "ALUMNOS/PROMEDIO/STATUS";
for($i=0; $i<$calificaciones $i cout($calificaciones); $i++){
	//echo "alumnos.calificaciones.status"."<br>";
echo "".$alumnos[$i]."......".$promedio[$i].".....".$status[$i]. "....."."<br>";
	
}
echo "calificaciones";
for($i=0 ;$i<12; $i++){
	for($j=0; $j<12; $j++){
echo $calificaciones [$i] [$j] . "  ";
	}
	echo "<br>";
}
echo "<br>";

?>