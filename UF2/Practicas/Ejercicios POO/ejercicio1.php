<?php

class Llibre
{
    public string $titol = "";
    public string $autor = "Miguel de Cervantes ";

    public function _construct(string $titol, string $autor){
        $this->titol = $titol;
        $this->autor = $autor;
    }


    public function getAutor(){
        echo "El autor es " . $this->autor;
    }

    public function desripcion(){
        return "Este es el libro " . $this->titol . " y su autor es: " . $this->autor;
    }


}
?>
