<?php 
$casas_info = [
    "Gryffindor" => [
    "background_color" => "#740001",
    "text_color" => "#FFD700",
    "welcome_message" => "Coratge, valor i determinació. Benvingut a Gryffindor!",
    "message_background" => "#D3A625",
    "image" => "https://1000marcas.net/wp-content/uploads/2021/11/Gryffindor-Logo.png"
    ],
    "Hufflepuff" => [
    "background_color" => "#FFDB00",
    "text_color" => "#60605B",
    "welcome_message" => "Lleialtat, paciència i treball dur. Benvingut a Hufflepuff!",
    "message_background" => "#EEE117",
    "image" => "https://static.wikia.nocookie.net/esharrypotter/images/3/30/Logo_Hufflepuff_2.png/revision/latest/scale-to-width-down/250?cb=20160417160852"
    ],
    "Ravenclaw" => [
    "background_color" => "#0E1A40",
    "text_color" => "#946B2D",
    "welcome_message" => "Intel·ligència, creativitat i saviesa. Benvingut a Ravenclaw!",
    "message_background" => "#5D5D5D",
    "image" => "https://i.pinimg.com/originals/7c/b2/6b/7cb26ba5add70e373f6959896d1aa0f7.png"
    ],
    "Slytherin" => [
    "background_color" => "#1A472A",
    "text_color" => "#AAAAAA",
    "welcome_message" => "Ambició, astúcia i lideratge. Benvingut a Slytherin!",
    "message_background" => "#5D5D5D",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/3/34/Slytherin.png"
    ]
    ];

    $nombre = $_POST['nombre'];
    $apellidos= $_POST['apellidos']; //Recoge los nombre y los apellidos del formulario

    $casa_seleccionada = array_rand($casas_info); //Saca una casa random
    $info_casa = $casas_info[$casa_seleccionada]; //guarda la casa

?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bienvenido a la casa Hogwarts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: <?php echo $info_casa['background_color']; ?>; color: <?php echo $info_casa['text_color']; ?>;">>
<div class="container text-center" >
<?php
        echo "
            <div class='welcome-message mt-4'>
                <h1>Bienvenido a " . $casa_seleccionada . "</h1>
                <p>" . $info_casa['welcome_message'] . "</p>
                <p>Estimado/da " . $nombre . " " . $apellidos . ", me complace darte la bienvenida a " . $casa_seleccionada . "!</p>
                <img src='" . $info_casa['image'] . "' class='mt-4' style='width: 300px;'> 
            </div>
            
        ";
    ?>   

</div>
</div>
</body>
</html>