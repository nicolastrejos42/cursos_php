<?php


echo "Hola, me podrías decir la hora, por favor."."<br>";;
"<br>";
echo "Claro, son las " . obtener_hora();


function obtener_hora (){
    date_default_timezone_set("America/Bogota");
    return date('h:i:s a');
}
//EJERCICIO QUE ME INDICA LA UBICACIÓN DEL ESPACIO EN LA BODEGA SEGÚN LA EDAD DEL NIÑO  
// $estudiante = 50;
// if ($estudiante < 5) {
//     echo "Quienes sean menores de 5 años tendrán sus espacios en la parte inferior de la bodega.";
// }else if ($estudiante >= 5 && $estudiante <=7 ){
//     echo "Quienes tengan entre 5 y 7 años tendrán sus espacios en la parte media de la bodega.";
// }else if ($estudiante >7){
//     echo "Quienes tengan más de 7 años tendrán sus espacios en la parte alta de la bodega.";
// }else{
//     echo "Quienes no tengan registro de su edad aún tendrán un espacio de almacenamiento en la bodega de al lado.";
// }

//FUNCIÓN PARA IMPRIMIR ASTERISCOS FORMANDO UN ÁRBOL DE NAVIDAD
// function arbolito($pisos){
//     for ($i=0; $i < $pisos ; $i++) {
//         echo str_repeat("*", $i) . "<br>";
//     }
// }
// arbolito(30);

