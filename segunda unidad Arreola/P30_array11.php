<?php
/* cbtis 89
programa que almacena datos en un arreglo y posterior mente los imprime
emma gabriela arreola vallejo
3A programacion matutino
*/ 
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>