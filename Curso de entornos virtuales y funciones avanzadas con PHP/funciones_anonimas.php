<?php

// Una funcion anonima se usa en una variable que requiere logica
$greet = function ($name) {
    return "Hola {$name}";
};

echo $greet('Kenneth');
echo "<br>";


function saludar(Closure $lang, $name)
{
    // $lang es la variable que contiene la funcion anonima
    // la palabra closure, es un parametro de PHP que indica:
    // 'requiero que esa variable sea una funcion'
    return $lang($name);
}

$es = function ($name) {
    return "Hola, {$name}";
};

$en = function ($name) {
    return "Hello, {$name}";
};


echo saludar($es, "Lynda");
echo "<br>";
echo saludar($en, "Brenda");
echo "<br>";
/////////////////////////////////////////////////////////////////////////////////////////////////OTRO EJEMPLO
//Ejemplo donde le pide al usuario un número y con array map recorre cada número y lo multiplica
$numbers = [1,2,3,4];
$number_multiply = readline("Escribe el numero por el cual quieres multiplicar: ". PHP_EOL);
$numbers_by_2 = array_map(function($current) use ($number_multiply) {
    return $current * $number_multiply;
},$numbers);

print_r($numbers_by_2);

echo PHP_EOL;
