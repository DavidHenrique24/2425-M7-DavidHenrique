n                                                                                                                                                                 n<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sombrero Seleccionador de Hogwarts</title>
    <style>
        body {
            background-image: url(https://images6.alphacoders.com/130/1305167.jpg);
            font-family: Arial, sans-serif;
            background-size: cover;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
             input[type="text"] {
            width: 93%;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
        
        }
        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1> Benvinguta a Hogwarts</h1>
        <form action="bienvenida.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos: " id="apellidos">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
