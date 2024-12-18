<?php 

echo "<h1>Ejercicio 3: numeros Pares del 50 al 500</h1>";
echo "<div class = marco>";

$i=(rand(0,100));  
 echo"El numero aleatorio es: $i";
 echo "<br>";
if ($i % 2==0){
    echo "<font color= red>El $i es par</font>";
    }else{
    echo "<font color= green>El $i es impar</font>";
    }
  
echo"</div>";
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 </title>
    <style>
       h1{
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-top: 100px;
        }
        .marco{
            text-align: center;
            font-size: 50px
                  
        }
        body{
         background-image: url(image.png);

        }
      


    </style>
</head>
<body>


    
</body>
</html>