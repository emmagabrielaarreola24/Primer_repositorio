<?php
/* cbtis 89
programa que 
emma gabriela arreola vallejo
3A programacion matutino
*/
//alamacena datosen un arreglo
$array1=(10 ,20 , 30,40 , 50);
$array2=(3, 7,6,15,18);
$arraysuma=array();
$arrayresta=array();
$arraydivi=array();
  //se realiza la operacion 
  echo " LA SUMA DE ARREGLOS";
  $suma=$array1+$array2;//se realiza la operacion aritmetica.
  $longitud = count($array1)
for ($i=0; $i <$longitud ; $i++) { 
	$arraysuma[$i] =$array1 [$i]+$array2[$i];
	$arrayresta[$i] = $array1 [$i]- $array2 [$i];
	$arraydivi[$i] =$array1 [$i]/$array2 [$i];
	echo "SUMA ENTRE ARREGLOS";
	for ($i=0; $i <$longitud ; $i++) { 
		echo $array1[$i]. " + ".$array2[$i]." =".$arraysuma[$i];
		echo"<br>";	}
	 }
	 for ($i=0; $i <$longitud ; $i++) { 
		echo $array1[$i]. " - ".$array2[$i]." =".$arrayresta[$i];
		echo"<br>";	}
	 }
	 for ($i=0; $i <$longitud ; $i++) { 
		echo $array1[$i]. " / ".$array2[$i]." =".$arraydivi[$i];
		echo"<br>";	}
	 }
?>