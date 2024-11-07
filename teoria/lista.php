$estudiantes= [
    ["nombre" => "Anna", "nota" => 10, "genero" => "m"],
    ["nombre" => "Dani", "nota" => 10, "genero" => "h"],
    ["nombre" => "Yehor", "nota" => 11, "genero"=> "h"],
    ["nombre" => "Lucia", "nota" => 9, "genero"=> "m"],
    ["nombre" => "David", "nota" => 12, "genero" => "h"]
];

foreach($estudiantes as $estudiante){
    echo"El estudiante: {$estudiante["nombre"]} ha sacado un {$estudiante["nota"]}<br>";
}
