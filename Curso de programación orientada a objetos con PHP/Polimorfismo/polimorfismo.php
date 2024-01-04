<?php

class Personaje{
    //Atributos - mi personaje tiene una vida y un dano de ataque
    public $vida;
    public $damage;

    //Metodos - al Atacar arrojara este mensaje por defecto.
    public function Atacar(){
        return 'Acabas de atacar';
    }
}

//Estoy creando la clase garen, donde heredara todos, los atributos y metodos de la clase Personaje.
class Garen extends Personaje{

    public function __construct($vida,$damage){
        $this->vida = $vida;
        $this->damage = $damage;
    }
    //Polimorfismo, estamos sobre escribiendo la funcion de atacar segun la necesidad que tiene este personaje.
    //Cuando garen ataca arroja un mensaje especial para el (Garen)
    public function Atacar(){
        return 'Garen acaba de pegar y te quito: '.$this->damage;
    }
}

//Instancio mi objeto, le envio la vida y el dano que tendra.
$garen = new Garen(100, 20);
echo $garen->Atacar();