<?php


//------------------------------------------APUNTES------------------------------------------------//
//con max saco el número máximo de un arreglo y con min saco el número mínimo del arreglo, con sqrt caso la raíz cuadrada del número escrito
// $numeros = [4,6,8,11,23,24,56,90,65,76,35,1,32];
// echo max($numeros)."<br>";
// echo min($numeros);
//echo sqrt(100);

//SUMA DE DOS NÚMEROS
// echo 5 + 5;
// $num1=10;
// $num2=5;
// echo $num1 + $num2;

//OTRA FORMA DE SUMAR DOS NÚMEROS
// $num1=10;
// $num2=5;
// $resultado = $num1 + $num2;
// echo $resultado;

//IMPRIME LOS NÚMEROS DE 1 AL 10
// for ($i=1 ; $i < 11 ; $i++) {
//     echo $i;
// }

//IMPRIME TODOS LOS NOMBRES DEL ARREGLO 
// $nombres=["Pedro","Raúl","Rodrigo","Juan","Nicolás","Carlos","Viviana","Laura"];
// foreach ($nombres as $nombre) {
//     echo "$nombre, ";
// } -->

//CUENTA CUÁNTOS ELEMENTOS HAY EN EL ARREGLO
// $numeros = [4,6,8,11,23,24,56,90,65,76,35,1,32];
// echo count($numeros);    


//Pide el tiempo al usuario
// $segundos = readline("Ingresa el tiempo en segundos: "); 

// $horas = (int) ($segundos / 3600); 
// $segundos = (int) ($segundos % 3600); 
// $minutos = (int) ($segundos / 60); 
// $segundos = (int) ($segundos % 60); 

// echo "Son $horas horas, $minutos minutos y $segundos segundos."; 
// echo "\n";

// $horas = readline("Ingresa las horas: "); 
// $minutos = readline("Ingresa los minutos: "); 
// $segundos = readline("Ingresa los segundos: ");

// $horas = (int) ($horas * 3600);
// $minutos = (int) ($minutos * 60);
// $segundos_totales = $horas + $minutos + $segundos ;



// echo "Tu tiempo total pasado a segundos es: $segundos_totales";

$valor=readline("Por favor, ingrese la cantidad que desea retirar: ");



if ($valor >= 100 ) {
    echo "Transacción en proceso...";
}else{
    echo "No puedes retirar tu dinero, la cantidad mínima es 100 dólares :(";
}








 echo "\n";