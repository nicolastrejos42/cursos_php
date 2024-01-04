<?php

// $variable = "nombre";
// $$variable = "Nicolás";

// echo $nombre;

// ¿Qué son las variables variables?
// Simplemente, PHP interpreta la variable que está en donde debería estar el nombre para saber cual es la variable que realmente debe modificar.
//En este caso la variable $$variable se lee como si fuera $edad
// $nombre = "Nicolás";
// $edad = "22";
// $comida_favorita = "Hamburguesa";

// $variable = "edad";

// echo $$variable;

$variable = "edad";
$$variable = 14;
echo $edad;
function bark() {
    return "woof!";
    }
    
    $function = "bark";
    echo $function();