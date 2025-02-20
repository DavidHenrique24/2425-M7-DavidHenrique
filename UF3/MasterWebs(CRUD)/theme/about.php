<body>
<?php include 'header.php'; ?>

<!-- título de la página -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">Sobre Agen</h1>
      </div>
    </div>
  </div>
</section>
<!-- /título de la página -->

<!-- barra de progreso -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0">
        <img src="images/about/about-us.png" alt="sobre nosotros" class="img-fluid">
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="progress-block">
          <h6 class="text-uppercase">Experiencia en HTML5</h6>
          <div class="progress">
            <div class="progress-bar" data-percent="55">
              <span class="skill-number text-dark font-weight-bold"><span class="count">55</span>%</span>
            </div>
          </div>
        </div>
        <div class="progress-block">
          <h6 class="text-uppercase">Experiencia en jQuery</h6>
          <div class="progress">
            <div class="progress-bar" data-percent="55">
              <span class="skill-number text-dark font-weight-bold"><span class="count">55</span>%</span>
            </div>
          </div>
        </div>
        <div class="progress-block">
          <h6 class="text-uppercase">Experiencia en PHP</h6>
          <div class="progress">
            <div class="progress-bar" data-percent="50">
              <span class="skill-number text-dark font-weight-bold"><span class="count">50</span>%</span>
            </div>
          </div>
        </div>
        <div class="progress-block">
          <h6 class="text-uppercase">Experiencia en Interfaz de Usuario</h6>
          <div class="progress">
            <div class="progress-bar" data-percent="40">
              <span class="skill-number text-dark font-weight-bold"><span class="count">40</span>%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /barra de progreso -->

<!-- video -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="overlay-secondary video-player">
          <img src="images/about/video-thumb.jpg" alt="miniatura del video" class="img-fluid w-100">
          <a class="play-icon">
            <i class="text-center icon-sm icon-box-sm rounded-circle text-white bg-gradient-primary d-block ti-control-play content-center"
              data-video="https://www.youtube.com/embed/jrkvirglgaQ?autoplay=1">
              <div class="ripple"></div>
            </i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /video -->

<!-- equipo -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Nuestro Equipo</h2>
        <p>Con un equipo dedicado y altamente calificado, trabajamos para brindarte las mejores soluciones.</p>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-1.jpg" alt="miembro del equipo" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">Sara Adams</a></h4>
            <i>Diseñadora</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-2.jpg" alt="miembro del equipo" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">Tom Bills</a></h4>
            <i>Desarrollador</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-3.jpg" alt="miembro del equipo" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">Anna Walle</a></h4>
            <i>Gerente</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="images/team/member-4.jpg" alt="miembro del equipo" class="card-img-top">
          <div class="card-body text-center">
            <h4>Devid Json</h4>
            <i>CEO</i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /equipo -->

<!-- testimonios -->
<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="text-white mb-5">Testimonios de nuestros clientes</h2>
      </div>
    </div>
    <div class="row bg-contain" data-background="images/banner/brush.png">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div id="slider" class="ui-card-slider bg-contain">
          <div class="slide">
            <div class="card text-center">
              <div class="card-body px-5 py-4">
                <img src="images/testimonial/user-1.jpg" alt="usuario-1" class="img-fluid rounded-circle mb-4">
                <h4 class="text-secondary">Mellissa Christine</h4>
                <p>“Excelente trabajo, recibí mucho más de lo que pedí, son muy legítimos y atractivos. Elegí uno de ellos para mi marca, pero siempre es mejor tener más opciones.”</p>
              </div>
            </div>
          </div>
          <!-- Añadir más slides si es necesario -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /testimonios -->

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