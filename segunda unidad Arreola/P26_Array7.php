<?php
/* cbtis 89
programa que 
emma gabriela arreola vallejo
3A programacion matutino
*/ 

   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>