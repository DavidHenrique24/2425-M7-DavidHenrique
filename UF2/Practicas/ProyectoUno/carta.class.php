<?php
class Carta {
    public $numero;
    public $color;
    public $index;

    public function __construct($numero, $color,$index = null) {
        $this->numero = $numero;
        $this->color = $color;
        $this->index = $index;
    }

    public function pintar_carta() {
        $imageName = $this->numero . '_' . strtolower($this->color) . '.png';
        return '<img src="cartas_uno/cartas_uno/' . $imageName . '" alt="Carta">';
    }

    public function pintar_carta_link() {
       
    }

    public function pinta_carta_girada() {
        return '<img src="cartas_uno/cartas_uno/carta_girada.png" alt="Carta girada">';
    }
}
?>
