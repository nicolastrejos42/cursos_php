<?php
include 'saludo.php';


$user = new User;//CREO UN USUARIO
$user->type = new Admin;//EL USUARIO ES DE TIPO ADMINISTRADOR
echo $user->type->greet();//Y SALUDO AL ADMINISTRADOR CON LA FUNCIÓN QUE ESTÁ EN LA CLASE PERSON
