<?php
/* cbtis 89
programa que alamacena datos de un arreglo de 50 numeros los cuales estraran en  3 arreglos
emma gabriela arreola vallejo
3A programacion matutino
*/


$arreglo1= array ();
$arreglo2 = array ();
$arreglo3 = array ();



for ($i=150;$i<200;$i++) { 
	 $num=$i%2;
	 if ($num==0)
	 {
	 $arreglo1[] =$i;
	 $arreglo2[]=$i+1;	
	 }
	 
		
}
for ($c=0; $c < count($arreglo1) ; $c++) { 
	$arreglo3[$c]=$arreglo1[$c]+$arreglo2[$c];}
	echo "arreglo1"."arreglo2"."arreglo3"."<br>";
	for ($j=0; $j < 26 ; $j++) { 
echo "".$arreglo1[$j]."......".$arreglo2[$j].".....".$arreglo3[$j]."<br>";
	}


?>