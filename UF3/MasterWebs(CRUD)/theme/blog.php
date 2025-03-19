<?php include 'header.php'; 
require_once 'config.php';


$result_news = $mysqli->query("SELECT * FROM News ");

?>

<body>
<!-- título de la página -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">Blog</h1>
      </div>
    </div>
  </div>
</section>
<!-- /título de la página -->

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

<!-- /equipo -->


<!-- llamada a la acción -->
<section class="section">
  <div class="container section-sm overlay-secondary-half bg-cover" data-background="images/backgrounds/cta-bg.jpg">
  <div class="row">
    <div class="col-lg-8 offset-lg-1">
      <h2 class="text-gradient-primary">¡Comencemos con nosotros!</h2>
      <p class="h4 font-weight-bold text-white mb-4">Estamos listos para ayudarte a llevar tu proyecto al siguiente nivel.</p>
      <a href="contact.html" class="btn btn-lg btn-primary">Hablemos</a>
    </div>
  </div>
</div>
</section>
<!-- /llamada a la acción -->

<!-- footer -->
<?php include 'footer.php'; ?>
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

<!-- Script principal -->
<script src="js/script.js"></script>

</body>
</html>
