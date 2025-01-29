<?php
class Libro {
    public string $titulo;
    public string $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    
    public function description(): string {
        return "Este libro es de " . $this->autor . " y el nombre del libro es: " . $this->titulo;
    }
}
$libro = new Libro("Mil años de Seriedad", "Sebastian Dayehk");

echo $libro->description();

?>


