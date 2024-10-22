<?php
/* cbtis 89
programa que 
emma gabriela arreola vallejo
3A programacion matutino
programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir convierte una cadena de texto a elemntos dentro de un arreglo
*/

//alamecena datos en un arreglo
$arraydatos = ["emma" , "carlos" , "joaquin "];

//convierte un arrayen una cadena de texto
$string = implode("", $arraydatos);
echo "cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//cadena de texto a separar 
$cadena = "tercero de programacion";

//convierte una cadena de texto en un array
$array = explode("   ", $cadena);

$longitud = count($array);
echo "<br>";
echo "arreglo con datos de tipo string <br>";

//imprime los elementos del arreglo
for ($j=0; $j<$longitud; $j++)
 { 
//imprime el valor de cada elemento
}
echo $array[$j];
echo "<br>";
