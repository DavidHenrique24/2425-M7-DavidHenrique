<?php 
//Codigo de prueba para la base de datos 
require_once 'config.php';
// $result_users = $mysqli->query("SELECT * FROM Users ORDER BY id DESC");

// $result_proj = $mysqli->query("SELECT * FROM Projects ORDER BY id DESC");

// $proyectos = $result_proj -> fetch_all(MYSQLI_ASSOC);
// print_r($proyectos);

// $users = $result_users -> fetch_all(MYSQLI_ASSOC);
// print_r($users);

//Sprint 3 h.1: 
// Consultas para Portafolio por id:
// SELECT * FROM Projects ORDER BY id DESC;

// Consultas para Testimonios por id:
// SELECT * FROM Testimonials ORDER BY id DESC;

// Consultas para noticias por fecha: 
// SELECT * FROM News ORDER BY new_date DESC;
// Para recuperar las 3 ultimas noticias 
// SELECT * FROM News ORDER BY new_date DESC LIMIT 3;

$result_portafolio = $mysqli->query("SELECT * FROM Projects ORDER BY id DESC LIMIT 3;
;");
$result_news = $mysqli->query("SELECT * FROM News ORDER BY new_date DESC LIMIT 3;)");



?>
<!DOCTYPE html>
<html lang="es">

<?php include 'header.php'; ?>




<!-- banner -->
<section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
  data-background="images/banner/banner2.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">MasterWebs</h1>
      </div>
    </div>
  </div>
</section>

<!-- equipo -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Nuestro Equipo</h2>
        <p>Un grupo de profesionales apasionados por la tecnología y el diseño, trabajando juntos para ofrecerte soluciones de alta calidad.</p>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-1.jpg" alt="team-member" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">Sara Adams</a></h4>
            <i>Diseñadora</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-2.jpg" alt="team-member" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">Tom Bills</a></h4>
            <i>Desarrollador</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-3.jpg" alt="team-member" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">Anna Walle</a></h4>
            <i>Gerente</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-4.jpg" alt="team-member" class="card-img-top">
          <div class="card-body text-center">
            <h4>Devid Json</h4>
            <i>CEO</i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- /blog -->
 <!-- about -->
<section class="section-lg position-relative bg-cover" data-background="images/backgrounds/about-bg.jpg">
  <img src="images/backgrounds/about-bg-overlay.png" alt="overlay" class="overlay-image img-fluid">
  <div class="container">
    <div class="row justify-content-between text-ligth">
      <div class="col-lg-6 col-md-8 col-sm-7 col-8">
        <h2 class="text-white mb-4">¿Quienes somos?</h2>
        <p class="text-light mb-4">Somo una empresa dedicada al diseño y desarrollo de sitios web <br>aplicaciones móviles y soluciones digitales para todo el <br>mundo</p>
        <a href="about.html" class="btn btn-primary">Leer </a>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- project -->
<section class="section">
  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Proyectos</h2>
        <div class="section-border"></div>
      </div>
    </div>

    <div class="row no-gutters shuffle-wrapper">
    <?php
$array_proyectos = $result_portafolio->fetch_all(MYSQLI_ASSOC);
// Recorrer los proyectos y mostrarlos dinámicamente
 foreach ($array_proyectos as $proyecto) : ?>
  <div class="col-lg-4 col-md-6 mb-4 shuffle-item" data-groups='["diseño"]'>
    <div class="card project-card hover-shadow mx-3 my-3 ">
      <img src="<?= $proyecto['thumbnail'] ?>" alt="project-thumb" class="card-img-top">
      <div class="card-body mt-2">
        <h4 class="card-title"><a href="project-single.html"><?= $proyecto['title'] ?></a></h4>
        <p class="card-text"><?= $proyecto['description'] ?></p>
        <a href="<?= $proyecto['url'] ?>" class="btn btn-transparent">Ver proyecto</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>


    </div>
  </div>
</section>
<!-- /project -->

<!-- call to action -->
<section>
  <div class="container section-sm overlay-secondary-half bg-cover" data-background="images/backgrounds/cta-bg.jpg">
  <div class="row">
    <div class="col-lg-8 offset-lg-1">
      <h2 class="text-gradient-primary">Let's Start With Us!</h2>
      <p class="h4 font-weight-bold text-white mb-4">Lorem ipsum dolor sit amet, magna habemus ius ad</p>
      <a href="contact.html" class="btn btn-lg btn-primary">Let’s talk</a>
    </div>
  </div>
</div>
</section>
<!-- /call to action -->
<!-- blog -->
<?php 


?>
<!-- /blog -->
 <?php
 $array_noticias = $result_news->fetch_all(MYSQLI_ASSOC);
// Recorrer las noticias y mostrarlas dinámicamente
foreach ($array_noticias as $noticia) : ?>
   <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Últimas Noticias</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
      <?php while ($noticia = $result_noticias->fetch_assoc()) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <article class="card mx-3 my-3"> <!-- Márgenes laterales -->
            <img src="<?= $noticia['thumbnail'] ?>" alt="post-thumb" class="card-img-top mb-2">
            <div class="card-body p-3"> <!-- Padding interno -->
              <time><?= date("F j, Y", strtotime($noticia['fecha'])) ?></time>
              <a href="blog-single.php?id=<?= $noticia['id'] ?>" class="h4 card-title d-block my-3 text-dark hover-text-underline">
                <?= $noticia['title'] ?>
              </a>
              <a href="blog-single.php?id=<?= $noticia['id'] ?>" class="btn btn-transparent">Leer más</a>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php endforeach; ?>

<!-- footer -->
<?php  include 'footer.php'?>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- shuffle -->
<script src="plugins/shuffle/shuffle.min.js"></script>
<!-- apear js -->
<script src="plugins/counto/apear.js"></script>
<!-- counter -->
<script src="plugins/counto/counTo.js"></script>
<!-- card slider -->
<script src="plugins/card-slider/js/card-slider-min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
