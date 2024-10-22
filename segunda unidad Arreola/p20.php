<?php
/*cbtis 89
programa que almacena diversos datos en un arreglo y posteriormente losimprime por medio de un ciclo for 
emma gabriela arreola vallejo
3 A programacion matutino 
*/
$nombre = "gaby";
$array = array(1 , 2 , 3 , " casa", $nombre);

// seo btiene el numero de elementos 
$longitud = count($array);

//recorre todos los elementos 
for ($i=0; $i < $longitud; $i++) { 
	// se obtiene elvalor de cada elemto 
	echo $array [$i];
	echo "<br>";
}
?>