<?php
/*programa que se muestren los numeros positivos y negativos por medio de un ciclo dentro de un arreglo
emma gabriela arreola vallejo
programacion matutino 3 A
*/

$arraynumerico =  array(1, -2,6,-14, 8,-10,11,17,-3,-16,89,130,-24,9,-8 );
$arraypositivos = array();
$arraynrgativos = array ();
$sumapositiva = 0;
$sumanegativos =0;

foreach ($arraynumerico as $numeros) {
	if($numeros >=0){
		$arraypositivos[] = $numeros;
		$sumapositiva += $numeros;

	}
	else{
		$arraynrgativos [] = $numeros;
		$sumanegativos += $numeros;
	}
}
echo "numeros positivos";
echo implode("," , $arraypositivos) . "<br>";

echo "numeros negativos";
echo implode(",", $arraynrgativos) . "<br>";

echo"la suma de los numeros positivos es :" . $sumapositiva. "<br>";
echo "la suma de los numeros negativos es :" . $sumanegativos . "<br>";
?>