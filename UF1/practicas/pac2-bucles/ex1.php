<?php 
echo "<h1>Ejercicio 1: numeros Pares del 50 al 500</h1>";
echo "<div class = padre>";
for ($i = 50; $i <= 200; $i++) {
    if($i%2==0){
        echo '<div class= "cuadro">'. $i .'</div>';
    }else{}
    }
echo "</div>"
?> 

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        h1{
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;


        }
     .cuadro{
        width: 50px;
        margin:10px;
        padding:50px;
        background-color:#303030;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color:#F0F0F0;
        text-align: center;

     }
     .padre{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    
     }
    </style>
</head>
<body>

    
</body>
</html>


</html>
