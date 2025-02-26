<?php 
//Codigo de prueba para la base de datos 
// require_once 'config.php';
// $result_users = $mysqli->query("SELECT * FROM Users ORDER BY id DESC");

// $result_proj = $mysqli->query("SELECT * FROM Projects ORDER BY id DESC");

// $proyectos = $result_proj -> fetch_all(MYSQLI_ASSOC);
// print_r($proyectos);

// $users = $result_users -> fetch_all(MYSQLI_ASSOC);
// print_r($users);

//Sprint 3 h.1: 
// Consultas para Portafolio por id:
// SELECT * FROM Projects ORDER BY created_at DESC;

// Consultas para Testimonios por id:
// SELECT * FROM Testimonials ORDER BY id DESC;

// Consultas para noticias por fecha: 
// SELECT * FROM News ORDER BY new_date DESC;
// Para recuperar las 3 ultimas noticias 
// SELECT * FROM News ORDER BY new_date DESC LIMIT 3;



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

<!-- servicio -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2 class="section-title">Nuestros Servicios</h2>
        <p class="lead">En MasterWebs nos especializamos en ofrecer soluciones personalizadas para tus proyectos digitales. Desde el diseño hasta el desarrollo, tenemos la experiencia necesaria para ayudarte a alcanzar tus objetivos con éxito. Ya sea que necesites una página web, una tienda online o una aplicación, estamos aquí para ayudarte a hacer realidad tus ideas.</p>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card hover-bg-secondary shadow py-4 active">
          <div class="card-body text-center">
            <div class="position-relative">
              <i
                class="icon-lg icon-box bg-gradient-primary rounded-circle ti-palette mb-5 d-inline-block text-white"></i>
              <i class="icon-lg icon-watermark text-white ti-palette"></i>
            </div>
            <h4 class="mb-4">Diseño</h4>
            <p>Diseñamos experiencias visuales atractivas y funcionales, siempre pensando en el usuario final. Creamos diseños personalizados que reflejan la identidad de tu marca, asegurándonos de que tu presencia online sea única y memorable.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card hover-bg-secondary shadow py-4">
          <div class="card-body text-center">
            <div class="position-relative">
              <i
                class="icon-lg icon-box bg-gradient-primary rounded-circle ti-dashboard mb-5 d-inline-block text-white"></i>
              <i class="icon-lg icon-watermark text-white ti-dashboard"></i>
            </div>
            <h4 class="mb-4">Desarrollo</h4>
            <p>Desarrollamos soluciones tecnológicas de vanguardia, adaptadas a las necesidades de tu negocio. Desde sitios web hasta aplicaciones móviles, contamos con las herramientas y el conocimiento necesario para llevar tu proyecto al siguiente nivel.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card hover-bg-secondary shadow py-4">
          <div class="card-body text-center">
            <div class="position-relative">
              <i
                class="icon-lg icon-box bg-gradient-primary rounded-circle ti-announcement mb-5 d-inline-block text-white"></i>
              <i class="icon-lg icon-watermark text-white ti-announcement"></i>
            </div>
            <h4 class="mb-4">Marketing</h4>
            <p>Desarrollamos estrategias de marketing digital para aumentar tu visibilidad y atraer a más clientes. Ya sea mediante SEO, campañas en redes sociales o marketing de contenidos, nuestro objetivo es ayudarte a crecer en el entorno digital.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /servicio -->

<!-- característica -->
<section class="section bg-secondary position-relative">
  <div class="bg-image overlay-secondary">
    <img src="images/feature.jpg" alt="bg-image">
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="row align-items-center">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="images/feature.jpg" alt="feature-image" class="img-fluid">
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="row">
              <div class="col-12">
                <h2 class="text-white">Sabemos Qué Herramientas Usar</h2>
                <div class="section-border ml-0"></div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-vector mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white">Experiencia de Usuario</h4>
                    <p class="text-light">Nos enfocamos en crear experiencias que sean intuitivas, agradables y fáciles de usar. El diseño de la interfaz siempre prioriza la experiencia del usuario para que cada interacción sea satisfactoria.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-layout mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white">Diseño Responsivo</h4>
                    <p class="text-light">Diseñamos sitios web que se adaptan a diferentes dispositivos y tamaños de pantalla. Nos aseguramos de que tu página se vea bien en computadoras, tabletas y teléfonos móviles.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-headphone-alt mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white">Soluciones Digitales</h4>
                    <p class="text-light">Creamos soluciones tecnológicas para optimizar tus procesos y hacer crecer tu negocio. Desde software personalizado hasta automatización de tareas, te ayudamos a estar a la vanguardia digital.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="media">
                  <i class="icon text-gradient-primary ti-ruler-pencil mr-3"></i>
                  <div class="media-body">
                    <h4 class="text-white">Uso de Bootstrap 4x</h4>
                    <p class="text-light">Utilizamos frameworks como Bootstrap para desarrollar diseños rápidos y escalables, garantizando que tu sitio web se vea bien en cualquier dispositivo sin sacrificar rendimiento ni funcionalidad.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /característica -->

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
