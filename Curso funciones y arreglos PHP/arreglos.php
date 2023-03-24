<?php


$meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
$edades = [23,53,64,73,13,88,64,14,56,56,75,16,43,90,99,98,92,20];


//recorre todas las posiciones del arreglo y la imprime en pantalla
// foreach ($meses as $mes) {
//     echo $mes."\n";
// }

//busca el elemento seleccionado en el arreglo, en este caso busca el número 20 en el arreglo $edades
//echo "Encontre esa edad en la posición número " . array_search( 20, $edades)." del arreglo";

array_rand($edades, 5);
echo "\n";