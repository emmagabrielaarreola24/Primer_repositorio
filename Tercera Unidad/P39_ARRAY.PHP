<?php
/*programa que se muestren los nombres y edades en tres grupos en donde se clasifican por sus rango de edad en el cuel se puede indicar si es menor de ddad , adulto y adulto mayor de edad por medio de un ciclo dentro de un arreglo
emma gabriela arreola vallejo
programacion matutino 
3*A
*/


$arraynombres = array("kiki", "gaby" , "liz", "lia ", "zoe", "juan" );

$arrayedades = array( 17 , 30 ,72 , 38 , 12 , 58 );

$grupo1 = array();
$grupo2 = array ();
$grupo3 = array ();



echo "CBTIS 89";
echo "<br>";
echo "NOMBRE";
echo "<br>";

for ($i=0; $i < 6 ; $i++) { 
	if ($arrayedades[$i]<18) {
		$grupo1[$i]= 1;
		$grupo2[$i] = 0;
		$grupo3 [$i]=0;

	}
	else if ($arrayedades[$i]>= 18 and $arrayedades [$i] <= 49)
	 { $grupo2[$i]= 1;
	 	$grupo1 [$i] =0 ;
	 	$grupo3 [$i] = 0;


	}

	else if($arrayedades[$i]>= 50)
	{
		$grupo3[$i]= 1;
	 	$grupo2 [$i] =0 ;
	 	$grupo1 [$i] = 0;

	}
}
echo "<br>";
 echo "nombre " . "grupo1 " . "grupo2" . "grupo 3" ."edad". "<br>";
 for ($i=0; $i <6 ; $i++) { 
 	echo $arraynombres[$i] . "----" . $grupo1[$i] . " ----" . $grupo2[$i] . "----" .$grupo3 [$i] ."-----". $arrayedades[$i].
 	"<br>";}
?>
