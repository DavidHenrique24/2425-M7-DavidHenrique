<?php
include 'carta.class.php';

class Baraja {
    public $conjunto_cartas = [];

    public function crear_baraja() { 
        foreach (['red', 'yellow', 'blue', 'green'] as $color) {
            for ($i = 0; $i <= 9; $i++) {
                $this->conjunto_cartas[] = new Carta($i, $color); 
            }
            $this->conjunto_cartas[] = new Carta('reverse', $color);
            $this->conjunto_cartas[] = new Carta('skip', $color);
            $this->conjunto_cartas[] = new Carta('picker', $color);
        }
    }

    // Mezclar las cartas
    public function mezcla() {
        shuffle($this->conjunto_cartas);
    }

    public function pinta_baraja() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pintar_carta(); 
        }
    }
   
    public function pinta_baraja_girada() {
        foreach ($this->conjunto_cartas as $carta) {
            echo $carta->pinta_carta_girada();  
        }
    }
    
}

?>
