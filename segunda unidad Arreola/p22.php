<?php
/* cbtis 89
programa que almacena datos en un arreglo y posterior mente los imprime
emma gabriela arreola vallejo
3A programacion matutino
*/ 
 $equipo  = array(" portero "=>'juan','defensa'=> 'diego','medio' => 'jair','delantero' =>'rafa' );
 echo "** SELECCION NACIONAL **", "<br>","<br>";
 foreach ($equipo as $posicon=>$jugador) {
 echo " el jugador " . $jugador . " es el " . $posicon;
 echo "<br>", "<br>";
 }
 ?>
