<?php
/* cbtis 89
programa que alamacena en un arreglo llamado $compras el valor de 6 compras , posteriormente enotros arreglosdebe alamcenar informacion de acuardo a las siguientes condiciones:
el contedidodel arraeglo $descuento se llenar de la siguiente manera:
compre menor 300=10
compra mayor 300 ymenor oigual a 100 =10%
compra mayor 100 y menor o igual a2500 y menor a 5000="=%
compra mayor 5000 = 25%
en elarreglo $total s emostrara la diferencia e la compra altener un descuento
emma gabriela arreola vallejo
3A programacion matutino
*/


$compras=array(800,2700,1900,150,7600,1000);
$descuentos=array();
$total=array();
$porcentaje=array();

foreach ($compras as $compra) {
	if ($compra < 300) {
	$porcentajedescuento=0;
	} elseif($compra >=300 && $compra <= 999) {
		$porcentajedescuento=10 ;
}
elseif ($compra >= 1000 && $compra <= 2499 ) {
	$porcentajedescuento = 15;
}

elseif ($compra >=2500 && $compra <=4999) {
	$porcentajedescuento =20;
}
elseif ($compra >= 5000 && $compra ){
	$porcentajedescuento = 25;
}
	
$montodedescuento = ($compra*$porcentajedescuento)/100;

$descuentos[]=$montodedescuento;
$total[]=$compra-$montodedescuento;
$porcentaje[] =$porcentajedescuento;
}
echo "Compra/Descuento/Total/Porcentaje <br>";
for ($i=0; $i < count($compras); $i++) { 
	//echo "arreglo1"."arreglo2"."arreglo3"."<br>";
echo "".$compras[$i]."......".$descuentos[$i].".....".$total[$i]. ".....".$porcentaje[$i]."%". "<br>";
	
}
?>