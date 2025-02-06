<?php
session_start();

class JuegoAdivinacion {
    public $numeroSecreto;
    public $intentos;  
    public function __construct() {
        $this->numeroSecreto = rand(1, 20); 
        $this->intentos = 0;  
    }

    public function comprobar($numero) {
        $this->intentos++;  

        if ($numero < $this->numeroSecreto) {
            return "Es mayor";
        } elseif ($numero > $this->numeroSecreto) {
            return "Es menor";
        } else {
            return "Has adivinado el numero secreto con {$this->intentos} intentos";
        }
    }
}

if (!isset($_SESSION['juego'])) {
    $_SESSION['juego'] = new JuegoAdivinacion();
}

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];
    $mensaje = $_SESSION['juego']->comprobar($numero);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego 1</title>
</head>
<body>
    <h1>Juego 1</h1>
    <form method="post" action="">
        <label for="numero">Pon un numero del 1 al 20:</label>
        <input type="number" id="numero" name="numero" >
        <button type="submit">Comprobar</button>
    </form>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
