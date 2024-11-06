<?php
/* cbtis 89
programa que alamacena datosde un arreglo
emma gabriela arreola vallejo
3A programacion matutino
*/

$Datos = array (array(10, 20, 30), array(40, 50, 60), array(70, 80, 90));

echo "NORMAL";
echo "<br>";
for ($j=0; $j<3; $j++){
	for ($h=0; $h<3; $h++){
		echo $Datos [$j] [$h]." ";
	}
	echo "<br>";
}
echo "<br>";

echo "FILAS A COLUMNAS";
echo "<br>";
for ($j=0; $j<3; $j++){
	for ($h=0; $h<3 ; $h++) { 
	echo $Datos	[$h] [$j]." ";
	}
	echo "<br>";
}
echo "<br>";

echo "COLUMNAS INVERSAS";
echo "<br>";
for ($j=0; $j<3; $j++){
	for ($h=2; $h>=0; $h--){
		echo $Datos [$j] [$h]." ";
	}
	echo "<br>";
}
echo "<br>";

echo "FILAS INVERSAS";
echo "<br>";
for ($j=2; $j>=0; $j--){
	for ($h=0; $h<3; $h++){
		echo $Datos [$j] [$h]." ";
	}
	echo "<br>";
}

?>