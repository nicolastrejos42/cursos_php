<?php

//CLASE PERSONA CON LA FUNCIÓN DE SALUDAR
class Person
{

    public function greet()
    {
        return "Hola $this->name";
    }
}

//CLASE USUARIO
class User
{

    public $type;
}

//CLASE ADMINISTRADOR QUE TIENE HERENCIA CON LA CLASE PERSON, ESTO ES IGUAL A (El administrador es una persona)
class Admin extends Person
{
    public $name = "Administrador";
}
