<?php 
class Factura{
    public $cliente;
    public $productos;
    public $cantidad;
    public $precioUnitario; 

    public function __construct($cliente, $productos, $cantidad, $precioUnitario){
        $this->cliente = $cliente;
        $this->productos = $productos;
        $this->cantidad = $cantidad;
        $this->precioUnitario = $precioUnitario;
    }

    public function calcularTotal(){
        return $this->cantidad * $this->precioUnitario;
    }
    public function aplicarDescuento(){
        return $this->calcularTotal() * 0.10;
    }
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego4</title>
</head>
<body>
    
    
</body>
</html>