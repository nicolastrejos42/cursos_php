<?php

$productos = [
    'Celular' => [
        'ancho' => 5,
        'alto' => 20
    ],
    'PlayStation 5' => [
        'ancho' => 47,
        'alto' => 43
    ],
    'Audifonos' => [
        'ancho' => 3,
        'alto' => 10
    ],
    'Tablet' => [
        'ancho' => 25,
        'alto' => 30
    ],
    'Teclado' => [
        'ancho' => 100,
        'alto' => 25
    ]
];

function calcularArea($producto)
{
    return $producto['ancho'] * $producto['alto'];
}

$areaProductos = array_map("calcularArea", $productos);

asort($areaProductos);

echo "<b>Productos sin ordenar:</b><br>";

foreach ($productos as $nombre => $producto) {
    echo "$nombre: " . $producto['ancho'] . " x " . $producto['alto'] . "<br>";
}

echo "<br>";
echo "<b>Productos ordenados:</b><br>";

foreach ($areaProductos as $producto => $area) {
    echo "$producto: $area cm<sup>2</sup><br>";
}
