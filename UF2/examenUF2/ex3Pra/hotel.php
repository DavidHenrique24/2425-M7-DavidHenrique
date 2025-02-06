<?php
class Habitacion { 
    public $tipo;
    public $precio;
    public $disponible;


    public function __construct($tipo, $precio, $disponible) {
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

  
    public function mostrarInfo() {
        if ($this->disponible) {
            $disponibilidad = "Disponible";
        } else {
            $disponibilidad = "No disponible";
        }
    
        return "Tipo: " . $this->tipo . " | Precio: " . $this->precio . "€ | Estado: " . $disponibilidad;
    }
    
}

class Hotel { 
    public $habitaciones = array();

    public function agregarHabitacion($habitacion) {
        $this->habitaciones[] = $habitacion;
    }

    public function listarHabitaciones() {
    
    }


    public function reservarHabitacion($tipo) {
    }

    public function mostrarDisponibilidad() {
      
    }
}
?>




?>
