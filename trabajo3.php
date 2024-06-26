<?php
 echo"cuanto mide su terreno (largo y ancho)\n";
 $largo = readline();

 $ancho = readline();
  
 $terreno = (($largo >= 1000) && ($ancho >= 1000)) ? "\nES BUENO PARA CULTIVOS EXTENSIVOS " : "ES MAS ADECUADO PARA CULTIVOS DE JARDIN O HUERTO\n";
 echo $terreno;














?>