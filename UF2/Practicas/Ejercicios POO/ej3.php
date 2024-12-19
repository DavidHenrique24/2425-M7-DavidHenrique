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
}
$libro1 = new Libro("Mil años de Seriedad", "Sebastian Dayehk");

echo $libro1->description();
$libro2 = new Libro();
echo " <br>";
echo $libro2->description();