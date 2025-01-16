<?php
class Carta {
    public $numero;
    public $color;
    public $index;

    public function __construct($numero, $color, $index) {
        $this->numero = $numero;
        $this->color = $color;
        $this->index = $index;
    }


    public function pintar_carta() {
        $imageName = strtolower($this->numero) . '_' . strtolower($this->color) . '.png';
        return '<img src="cartas_uno/cartas_uno/cartas/' . $imageName . '" alt="' . $this->numero . ' de ' . $this->color . '" class="carta">';
    }

    public function pintar_carta_link(){
        







    }

    public function pinta_carta_girada() {
        return '<img src="cartas_uno/cartas_uno/carta_girada.png/">';
    }

    



    }

?>
