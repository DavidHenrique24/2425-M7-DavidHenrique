<?php 
class Llibre{
    public string $titulo;
    public string $autor;
    public string $anyo;
    public string $urlFoto;

    public function __construct($titulo, $autor, $anyo) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anyo = $anyo;
    }
    
    public function description(): string {
        return "Este libro es de " . $this->autor . " y el nombre del libro es: " . $this->titulo;
    }
}

class Biblioteca{
    //Esto tiene que ser un array
    public array $libros;

    public function __construct() {
        $this->libros = [];
    }


    public function agregarLibro(L $libro){
        $this->libros[] = $libro; 

    }

    // Método para mostrar todos los libros
    public function mostrarLibros(): array {
        return $this->libros; 
    }

    //metodo para buscar los libros
    public function buscarLibros(){

        
    }
    



}


?>