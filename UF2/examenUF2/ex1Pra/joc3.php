<?php 
class Usuario{
    public $nombre;
    public $edad;
    public $email;

    public function __construct($nombre, $edad, $email){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }

    public function validarDatos() {
        if (empty($this->nombre)) {
            return "El nombre es obligatorio.";
        }
        return true;
    }

   

}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego 3</title>
</head>
<body>
    
</body>
</html>