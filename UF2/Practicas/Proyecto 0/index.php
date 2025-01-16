<?php
session_start();

// Definir la clase Libro
class Libro {
    public string $titulo;
    public string $autor;
    public string $anyo;
    public string $urlFoto;

    public function __construct($titulo, $autor, $anyo, $urlFoto) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anyo = $anyo;
        $this->urlFoto = $urlFoto;
    }
    
    public function description(): string {
        return "Este libro es de " . $this->autor . " y el nombre del libro es: " . $this->titulo;
    }
}

// Definir la clase Biblioteca
class Biblioteca {
    public array $libros;

    public function __construct() {
        $this->libros = [];
    }

    public function agregarLibro(Libro $libro) {
        $this->libros[] = $libro;
    }

    public function mostrarLibros(): array {
        return $this->libros;
    }

    public function buscarLibros(string $texto): array {
        $resultado = [];
        //bucle forach usando this
        foreach ($this->libros as $libro) {
            //stripos para buscar usando mayusculas o minusculas 
            if (stripos($libro->titulo, $texto) !== false) {
                $resultado[] = $libro;
            }
        }
        return $resultado;
    }
}
$biblioteca= new Biblioteca;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //verificamos si el formulario para agregar libro fue enviado
    if (isset($_POST['titulo'], $_POST['autor'], $_POST['anyo'], $_POST['urlFoto'])) {
      $titulo=$_POST['titulo'];
      $autor=$_POST['autor'];
      $anyos= $_POST['anyo'];
      $urlFoto=$_POST['urlFoto'];
      //Creamos un nuevo libro
      $nuevoLibro= new Libro($titulo,$autor,$anyo, $urlFoto);
      //con la flecha accedo al meotod agregalibro a la instancia de biblioteca
      $biblioteca->agregarLibro($nuevoLibro);

    }
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .libro {
            width: 200px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .libro img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
      

    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Biblioteca Virtual</h1>

        <!-- Formulario  -->
        <div class="mb-4">
            <h2>Agregar un libro</h2>
            <form method="POST" action="">
                <div class="mb-3">
                    <input type="text" name="titulo" class="form-control" placeholder="Titulo" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="autor" class="form-control" placeholder="Autor" required>
                </div>
                <div class="mb-3">
                    <input type="number" name="anyo" class="form-control" placeholder="Año de publicación" required>
                </div>
                <div class="mb-3">
                    <input type="url" name="urlFoto" class="form-control" placeholder="URL de la imagen" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar libro</button>
            </form>
        </div>

        <!-- Formulario para buscar libros -->
        <div class="mb-4">
            <h2>Buscar libro</h2>
            <form method="POST" action="">
                <input type="text" name="buscarTitulo" class="form-control" placeholder="Buscar por título" required>
                <button type="submit" class="btn btn-secondary mt-2">Buscar libro</button>
            </form>
        </div>

        <!-- Resultados de la busqueda -->
        <div id="resultadosBusqueda" class="mb-4">
            <h3>Resultados de la búsqueda:</h3>
            <div class="d-flex flex-wrap">
                <?php if (count($librosBusqueda) > 0): ?>
                    <?php foreach ($librosBusqueda as $libro): ?>
                        <div class="libro">
                            <img src="<?= $libro->urlFoto ?>" alt="<?= $libro->titulo ?>">
                            <h5><?= $libro->titulo ?></h5>
                            <p>Autor: <?= $libro->autor ?></p>
                            <p>Año: <?= $libro->anyo ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="d-flex flex-wrap">
            <h3>Libros de la biblioteca:</h3>
            <?php foreach ($biblioteca->mostrarLibros() as $libro): ?>
                <div class="libro">
                    <img src="<?= $libro->urlFoto ?>" alt="<?= $libro->titulo ?>">
                    <h5><?= $libro->titulo ?></h5>
                    <p>Autor: <?= $libro->autor ?></p>
                    <p>Año: <?= $libro->anyo ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
