<?php

////////////CLASE 1

// $edades = [20,18,40];

// echo "Una de las edades que está dentro de un arreglo es: " . $edades[0];

///////////CLASE 2
//ARREGLO ASOCIATIVO

// $edades = [
//     "Luis"=>19,
//     "Lucía"=>40,
//     "Carlos"=>32
// ];

// echo "Le edad de Lucía es: " . $edades["Lucía"];

////////////CLASE 3
// $edades = [18,22,40,55];
//count(me ayuda a saber cuántos elementos hay en un arreglo)

// echo count($edades);

//array_push

// array_push($edades,13);
// var_dump($edades);

//is_array(me ayuda a saber si es un arreglo o no)

// $esto_no_es_un_arreglo ="";
// var_dump(is_array($esto_no_es_un_arreglo));
// var_dump(is_array($edades));

//explode(convierte un string en un arreglo)

// $lista_frutas = "fresa,cereza,manzana";
// $lista_frutas_array = explode(",", $lista_frutas);

//implode(convierte un arreglo en un string)

// $lista_frutas_array = ["fresa","cereza","manzana"];
// $lista_frutas = implode(",", $lista_frutas_array);
// var_dump($lista_frutas);

////////////CLASE 5
// $dinero = 50;
// if ($dinero > 100) {
//     echo "Somos ricos";
// }
// else {
//     echo "Somos pobres";
// }
////////////CLASE 6
// $edad = 36;

// switch($edad) {
//     case $edad < 1:
//         echo "Eres bebé";
//         break;
//     case $edad < 12:
//         echo "Estas en la niñez";
//         break;
//     case $edad < 20:
//         echo "Estas en la adolescencia";
//         break;
//     case $edad < 50: 
//         echo "Estas en la adultez";
//         break;
//     case $edad < 70 : 
//         echo "Eres un adulto mayor";
//         break;
//     case $edad < 100: 
//         echo "Estás en la vejez";
//         break;
//     default: 
//     echo "Ingresa una edad válida";
    
// }
////////////CLASE 7
// $streamer = readline("¿Cuántos usd te han donado?: ");

// if ($streamer >= 100) {
// echo "¡Excelente! Ya puedes retirar tu dinero";
// } else {
// echo "Oww 😦, Tu puedes! No te des por vencid@";
// }
////////////CLASE 8 (bucle while)
// $contador = 0;

// while ($contador < 10 ) {
//     echo 'Mensaje'."<br>";
//     $contador++;
// }
////////////CLASE 9 (bucle do while)
// $usernames = ["SweetPain", "FairerEye"];
// do {
//     $username = readline("Ingresa tú nombre de usuario: ");
// } 
// while (in_array($username, $usernames));
//     echo "Hola $username"."<br>";
////////////CLASE 10 (bucle for)
// $meses = array(
//     "Enero",
//     "Febrero",
//     "Marzo",
//     "Abril",
//     "Mayo",
//     "Junio",
//     "Julio",
//     "Agosto",
//     "Septiembre",
//     "Octubre",
//     "Noviembre",
//     "Diciembre"
// );

// $meses_ingles = array(
//     "January",
//     "February",
//     "March",
//     "April",
//     "May",
//     "June",
//     "July",
//     "August",
//     "September",
//     "October",
//     "November",
//     "December"
// );


// for ($i=0; $i < count($meses) ; $i++) { 
//     echo "El mes ".$i + 1 . " es: " . $meses[$i] . " -> ". $meses_ingles[$i] . "<br>";
// }
//-------------------------------------------------------------------------------------
for ($i = 0, $j = 0; $i < 10; $i++, $j += 2) {
    // Escribir todo nuestro código
    echo "i = $i j = $j" . "<br>";
}
