<?php 
class Partida{
    public $numero_jugadores;
    public $numero_cartas;
    public $turno;
    public $baraja;
    public $carta_en_mesa;
    public $array_jugadores;
    public $constante_sentido;

    public function __construct($numero_jugadores, $numero_cartas){
        $this->numero_jugadores = $numero_jugadores;
        $this->numero_cartas = $numero_cartas;
        $this->turno = 0;
        $this->baraja = new Baraja();
        $this->baraja->crear_baraja();
        $this->baraja->mezcla();
        $this->carta_en_mesa = $this->baraja->conjunto_cartas[0];
        $this->array_jugadores = [];
        $this->constante_sentido = 1;
    }

    public function jugar(){

    }

    public function normas_uno(){ 

    }

    public function cambiar_turno(){
     
    }








}


?> 