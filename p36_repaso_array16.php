<?php
/* cbtis 89
programa que impriman los ropa que llevan al mostrasor ,junto con los nombres de las personas que los reciben, en una  lista de personas estaran enumeradas
emma gabriela arreola vallejo
3A programacion matutino
*/

$arraynumerico= array( "playera ,pantalon ,chamarras, camisas ");
//orden asendente

sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//se muestra como van las compras de la tienda

$tienda = array(" playera "=>'emma','pantalon'=> 'diego','conjunto' => 'carlos','camisa' =>'liz' );
 echo "** DATOSDE COMPRA **", "<br>","<br>";
 foreach ($tienda as $posicon=>$compra) {
 echo " le comprador " . $compra . " es el " . $posicon;
 echo "<br>", "<br>";
 }
 ?>