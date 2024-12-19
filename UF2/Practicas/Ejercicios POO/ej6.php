<?php
class Persona {
    public string $nombre;
    public string $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar(){
        return "Hola, soy " . $this->nombre . " y tengo " . $this->edad . " años.";
    }
}
// Verificar formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Recoger los datos del post pa ponerlo a persona
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    $persona = new Persona($nombre, $edad);

    echo $persona->saludar();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Formulario de Persona</h2>
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" ><br><br>
        
        <label for="edad">Edad:</label>
        <input type="numero" name="edad" id="edad" ><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
