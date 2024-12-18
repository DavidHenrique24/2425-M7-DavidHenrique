<?php  
$peliculas= [
    ["nombre" => "Spirited Away", 
    "horario" => ["14:00", "17:50", "20:00"],
    "imagen" => "https://static.wikia.nocookie.net/disney/images/c/c5/Spirited_Away.jpg/revision/latest?cb=20130421015528&path-prefix=es",
 
],[
        "nombre" => "My Neighbor Totoro", 
        "horario" => ["12:00", "15:00", "18:00"],
        "imagen" => "https://es.web.img3.acsta.net/medias/nmedia/18/70/26/45/20236853.jpg",

    ],
    [
        "nombre" => "Princess Mononoke", 
        "horario" => ["13:00", "16:30", "19:30"],
        "imagen" => "https://m.media-amazon.com/images/I/81jSJRqb9IL._AC_UF894,1000_QL80_.jpg",
    ],
    [
        "nombre" => "Howl's Moving Castle", 
        "horario" => ["14:15", "17:30", "20:45"],
        "imagen" => "https://es.web.img3.acsta.net/img/90/ea/90ea2e07d6c5897672fbd39c73b4d14f.jpg",
    ],
    [
        "nombre" => "The Secret World of Arrietty", 
        "horario" => ["11:30", "15:45", "19:00"],
        "imagen" => "https://m.media-amazon.com/images/M/MV5BNzdhZDhiNWQtYzA0Yy00NGU5LTg2M2UtMWIxNTIzNGFjNzViXkEyXkFqcGc@._V1_.jpg",
    ],
    [
        "nombre" => "Kiki's Delivery Service", 
        "horario" => ["13:30", "16:15", "19:00"],
        "imagen" => "https://m.media-amazon.com/images/S/pv-target-images/b7c6b9756d1fcc53987ae7ba88b1cb04d3daa47db2ffa11f88cbc57a8deb7683.jpg",

    ],
    [
        "nombre" => "Ponyo", 
        "horario" => ["12:30", "15:15", "18:15"],
        "imagen" => "https://m.media-amazon.com/images/M/MV5BZDkzMzQ5ZmQtOTA3MC00MjhiLTk5M2UtNzk0MjEzZmVjN2UxXkEyXkFqcGc@._V1_.jpg",
    ],
    [
        "nombre" => "The Tale of the Princess Kaguya", 
        "horario" => ["14:45", "17:15", "20:15"],
        "imagen" => "https://static.wikia.nocookie.net/doblaje/images/0/00/1679811539368_ioa78s_2_0.jpg/revision/latest?cb=20230326062355&path-prefix=es",
      
    ],
    [
        "nombre" => "The Wind Rises", 
        "horario" => ["14:00", "17:00", "20:00"],
        "imagen" => "https://m.media-amazon.com/images/M/MV5BMTU4NDg0MzkzNV5BMl5BanBnXkFtZTgwODA3Mzc1MDE@._V1_.jpg",
    ]
    ];

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Cartelera</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    
  </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-white">
            <div class="container">
                <img src="https://www.ocinemagic.es/images/logo-ocine-mag.png#joomlaImage://local-images/logo-ocine-mag.png?width=240&height=119" alt="">
                <hr style="border: none; height: 2px; background-color: red;">
            </div>
        </nav>
    </header>

    <main>
        <section class="py-5 text-center">
            <div class="container">
                <h1 class=""><strong>Cartelera</strong></h1>
                <hr style="height: 10px; color: red;">
            </div>
        </section>

      <div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php 
            foreach ($peliculas as $pelicula) {
            ?>
                <div class="col">
                    
                   
                        <img src="<?php echo $pelicula['imagen']; ?>" class="card-img-top img-fluid" alt="<?php echo $pelicula['nombre']; ?>" style="object-fit: cover; height: 600px;">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $pelicula['nombre']; ?></h3>
                            <p class="card-text"><?php echo implode(" | ",$pelicula['horario']) ; ?></p>
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                   <a href="trailer.php?nombre=<?= urlencode($pelicula['nombre']) ?>" class="btn btn-sm btn-outline-secondary">Ver Tráiler</a>
                                   <a href="detalles.php?nombre=<?php echo urlencode($pelicula['nombre']);?>"><button type="button" class="btn btn-sm btn-outline-secondary">Ver más información</button>
                                </a> 
                                </div>
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


