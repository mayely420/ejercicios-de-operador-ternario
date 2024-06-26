<?php
echo "digite su edad\n";
$edad = readline();
$condicion = ($edad >= 18) ? (readline("tiene licencia?\n ") == "si" ? "puedes conducir" : "debes obtener una licencia primero") : "no tiene edad suficiente";
echo $condicion;























?>