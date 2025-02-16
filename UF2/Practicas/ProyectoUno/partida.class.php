<?php
class Partida {
    public $numero_jugadores;
    public $numero_cartas;
    public $turno;
    public $baraja;
    public $carta_en_mesa;
    public $array_jugadores;
    public $constante_sentido;

    public function __construct($numero_jugadores, $numero_cartas) {
        $this->numero_jugadores = $numero_jugadores;
        $this->numero_cartas = $numero_cartas;
        $this->turno = 0;
        $this->baraja = new Baraja();
        $this->baraja->crear_baraja();
        $this->baraja->mezcla();
        $this->carta_en_mesa = $this->baraja->conjunto_cartas[0];
        $this->array_jugadores = [];
        $this->constante_sentido = 1; // Sentido horario
    }

    public function jugar() {
       

        $jugadorActual = $this->array_jugadores[$this->turno];
        echo "Es el turno del jugador: " . $jugadorActual->nombre;

        // Muestra la carta en mesa
        echo "Carta en mesa: ";
        $this->carta_en_mesa->pinta_carta();
    }

    public function normas_uno() {
    }

    public function cambiaTurno() {
        // Cambiar turno dependiendo del sentido
        if ($this->constante_sentido == 1) {
            $this->turno = ($this->turno + 1) % $this->numero_jugadores;
        } else {
            $this->turno = ($this->turno - 1 + $this->numero_jugadores) % $this->numero_jugadores;
        }

        echo "El siguiente turno es del jugador: " . $this->array_jugadores[$this->turno]->nombre;
    }
}
?>
