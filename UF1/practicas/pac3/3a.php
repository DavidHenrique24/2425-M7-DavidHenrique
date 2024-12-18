<?php 
$idolos = [
    ["nombre" => "Tiago", "imagen" => "https://www.billboard.com/wp-content/uploads/2022/11/Tiago-PZK-2022-cr-Move-Management-billboard-1548.jpg", "descripcion" => "Es mi artista favorito ya que me gusta mucho su musica y me gusta mucho"],
    ["nombre" => "Duki", "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCiZgK2FD7cPZTyQ5xry7CQgwN_MB7HQkwsA&s", "descripcion" => "Es un artista que me gusta mucho por la dura vida que tuvo y como salio de su adiccion de las drogas"],
    ["nombre" => "Hayao Miyasaki", "imagen" => "https://www.elsoldemexico.com.mx/incoming/26wkh5-fondo_hayao.png/ALTERNATES/LANDSCAPE_768/fondo_hayao.png", "descripcion" => "Un gran creador de peliculas y de mis favoritos por su gran creatividad al hacer sus peliculas"],
    ["nombre" => "Hidetaka Miyasaki", "imagen" => "https://cl.buscafs.com/www.levelup.com/public/uploads/images/838136/838136.jpg", "descripcion" => "El creador de los souls me parece una gran mente creativa y lo admiro por crear su saga"],
    ["nombre" => "Arthur Morgan", "imagen" => "https://i.blogs.es/106154/red-dead-redemption-2/500_333.jpeg", "descripcion" => "Un gran personaje que me demostro que aun por mas malo que seas, aun puedes tener una redencion"],
    ["nombre" => "Thorfinn", "imagen" => "https://i.blogs.es/a99677/vinland-saga-temporada-2/840_560.jpeg", "descripcion" => "Guerrero que me demostro que un verdadero guerrero es aquel que no tiene enemigos"],
    ["nombre" => "Shirogane Miyuki", "imagen" => "https://static1.cbrimages.com/wordpress/wp-content/uploads/2021/11/miyuki-proud-2.jpg", "descripcion" => "Otro personaje que me desmotro que todo se puede hacer trabajando duro dia y noche"],
    ["nombre" => "Cristiano Ronaldo", "imagen" => "https://phantom-marca.unidadeditorial.es/f44f8eaebcbdef265bad672de04515c4/resize/828/f/jpg/assets/multimedia/imagenes/2022/07/30/16591778851898.jpg", "descripcion" => "Persona que me desmotro que siempre Siuuuu nunca nooo"],
    ["nombre" => "Jesse Mcree", "imagen" => "https://assetsio.gnwcdn.com/-1634936848464.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp", "descripcion" => "Vaquero que sigue adelante a pesar de tener un pasado malo, sigue adelante por reformarse"]
];
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeria de Ídolos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Album</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="py-5 text-center">
            <div class="container">
                <h1 class="font-weight-light">Album de idolos</h1>
            </div>
        </section>

      <div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php 
            foreach ($idolos as $idolo) {
            ?>
                <div class="col">
                   
                        <img src="<?php echo $idolo['imagen']; ?>" class="card-img-top img-fluid" alt="<?php echo $idolo['nombre']; ?>" style="object-fit: cover; height: 250px;">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $idolo['nombre']; ?></h3>
                            <p class="card-text"><?php echo $idolo['descripcion']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                                </div>
                                <small class="text-muted">Hace un momento</small>
                            </div>
                        </div>
                    
                </div>
            <?php 
            }
            ?>
        </div>
    </div>
</div>

    </main>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>
