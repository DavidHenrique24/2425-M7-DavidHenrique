<?php 

include 'header.php'; 
require_once 'config.php';

// Consultas para Portafolio por id:
$result_portafolio = $mysqli->query("SELECT * FROM Projects ORDER BY id DESC LIMIT 3");
// Consultas para Noticias por fecha:
$result_news = $mysqli->query("SELECT * FROM News ORDER BY new_date DESC LIMIT 3");
// Consultas para Usuarios:
$result_users = $mysqli->query("SELECT * FROM Users ORDER BY id DESC LIMIT 3");

$result_testimonios = $mysqli->query("SELECT * FROM Testimonials ORDER BY id DESC LIMIT 3");
?>

<!DOCTYPE html>
<html lang="es">

<!-- banner -->
<section class="banner bg-cover position-relative d-flex justify-content-center align-items-center" 
  style="background-image: url('images/backgrounds/page-title.jpg'); background-size: cover; background-position: center; height: 400px;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">MasterWebs</h1>
      </div>
    </div>
  </div>
</section>

<!-- equipo -->
<section class="section bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Ultimos usuarios</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
      <?php
      // Convertimos los resultados en un array
      $array_users = $result_users->fetch_all(MYSQLI_ASSOC);
      // Recorremos el array y mostramos las tarjetas
      foreach ($array_users as $user) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card team-card hover-shadow mx-3 my-3 border border-light rounded shadow-lg">
            <img src="<?= $user['avatar'] ?>" alt="team-thumb" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;">
            <div class="card-body text-center">
              <h4 class="card-title text-primary"><?= $user['name'] ?> <?= $user['surname'] ?></h4>
              <p class="card-text"><?= $user['rol'] ?></p>
  
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- proyectos -->
<section class="section bg-secondary py-5">
  <div class="container-fluid px-5">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2 class="text-white">Ultimos Proyectos</h2>
        <div class="section-border"></div>
      </div>
    </div>

    <div class="row no-gutters">
      <?php
      $array_proyectos = $result_portafolio->fetch_all(MYSQLI_ASSOC);
      foreach ($array_proyectos as $proyecto) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card project-card hover-shadow mx-3 my-3 border border-light rounded shadow-lg" style="height: 600px;">
            <img src="<?= $proyecto['thumbnail'] ?>" alt="project-thumb" class="card-img-top rounded" style="height: 300px; object-fit: cover;">
            <div class="card-body d-flex flex-column" style="height: 200px;">
              <h4 class="card-title text-primary"><a href="project-single.html"><?= $proyecto['title'] ?></a></h4>
              <p class="card-text flex-grow-1"><?= $proyecto['description'] ?></p>
              <a href="<?= $proyecto['url'] ?>" class="btn btn-outline-primary mt-auto">Ver proyecto</a>
              
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<!-- noticias -->
<section class="section bg-light py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Últimas Noticias</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
      <?php
      $array_noticias = $result_news->fetch_all(MYSQLI_ASSOC);
      foreach ($array_noticias as $noticia) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card mx-3 my-3 border border-light rounded shadow-lg" style="height: 400px;"> 
            <img src="<?= $noticia['thumbnail'] ?>" alt="post-thumb" class="card-img-top mb-2 rounded" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column" style="height: 200px;">
              <time class="text-muted"><?= date("F j, Y", strtotime($noticia['new_date'])) ?></time>
              <a href="blog-single.php?id=<?= $noticia['id'] ?>" class="h4 card-title d-block my-3 text-dark hover-text-underline">
                <?= $noticia['title'] ?>
              </a>
              <a href="blog-single.php?id=<?= $noticia['id'] ?>" class="btn btn-outline-primary mt-auto">Leer más</a>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonios -->
<section class="section bg-secondary py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2 class="text-white">Nuevos Testimonios</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
      <?php

      $array_testimonios = $result_testimonios->fetch_all(MYSQLI_ASSOC);
      foreach ($array_testimonios as $testimonio) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card border-light rounded shadow-lg">
            <img src="<?= $testimonio['image'] ?>" alt="" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;">
            <div class="card-body text-center " style="height: 250px;">
              <h4 class="card-title text-primary"><?= $testimonio['name'] . ' ' . $testimonio['surname'] ?></h4>
              <p class="text-muted"><?= date("F j, Y", strtotime($testimonio['date'])) ?></p>
              <p class="card-text"><?= $testimonio['description'] ?></p>
              <div class="d-flex justify-content-center">
                <?php
                // Mostrar estrellas de valoración 
                for ($i = 1; $i <= 5; $i++) {
                  echo $i <= $testimonio['rating'] ? '<i class="ti-star text-warning"></i>' : '<i class="ti-star text-muted"></i>';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<!-- footer -->
<?php include 'footer.php'; ?>

</body>
</html>
