<?php
    class Libro{

        public string $titulo ="Titulo defaul";
        public string $autor = "Autor defaul";

        public function __construct($titulo = null, $autor = null)
        {
            if($titulo != null){
                $this->titulo = $titulo;
            }
            if($autor != null){
                $this->autor = $autor;
            }
        }

        public function descripcion(){
            return "Este libro es de " . $this->autor . " y el nombre del libro es: " . $this->titulo;
        }
    }
    $libro1 = new Libro(); 
    $libro2= new Libro("Mil años de Seriedad", "Sebastian Dayehk");    
    echo $libro1->descripcion();
    echo " <br>";
    echo $libro2->descripcion();
?>
