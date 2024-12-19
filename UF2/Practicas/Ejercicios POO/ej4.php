<?php


class Libro {
    public string $titulo;
    public string $autor;

    public function __construct($titulo = "titulo defaul", $autor="autor defaul") {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    
    public function description(): string {
        return "Este libro es de " . $this->autor . " y el nombre del libro es: " . $this->titulo;
    }

    public function autorDevol() : string {
        return "El autor es: " . $this->autor;

    }
}

$libro = new Libro("Mil años de Seriedad", "Sebastian Dayehk");
echo $libro->description();
echo " <br>";
echo $libro->autorDevol();
