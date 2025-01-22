<?php
include 'carta.class.php';

class Baraja {
    public $conjunto_cartas = [];

    public function crear_baraja() { 
        foreach (['red', 'yellow', 'blue', 'green'] as $color) {
            for ($i = 0; $i <= 9; $i++) {
                $this->conjunto_cartas[] = new Carta($color, $i);
            }
            $this->conjunto_cartas[] = new Carta($color, 'reverse');
            $this->conjunto_cartas[] = new Carta($color, 'skip');
            $this->conjunto_cartas[] = new Carta($color, '+2');
        }
    }

    // Mezclar las cartas
    public function mezcla() {
        shuffle($this->conjunto_cartas);
    }

    // Pintar todas las cartas
    public function pinta_baraja() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pintar_carta(); 
        }
    }

    // Pintar todas las cartas como giradas
    public function pinta_baraja_girada() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pinta_carta_girada();
        }
    }
}
?>
