<body>
<?php include 'header.php';   
require_once'config.php';
$result_news = $mysqli->query("SELECT * FROM News ");
$result_testimonios = $mysqli->query("SELECT * FROM Testimonials");



?>

<!-- page-title -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">Blog Detalles</h1>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->

  <?php
 $id_noticia = $_GET['id'] ?? null;
 $array_noticias = $result_news->fetch_all(MYSQLI_ASSOC);  

  foreach ($array_noticias as $noticia) {
    if ($noticia['id'] == $id_noticia) { ?>
     <section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
      <h2 class="font-tertiary mb-2 text-center"><?= $noticia['title'] ?></h2>
      <h5 class="text-muted text-center"><?= $noticia['subtitle'] ?></h5>
        <img src="<?= $noticia['thumbnail'] ?>" alt="post-thumb" class="img-fluid w-100 mb-3 border-line">
        <p><?= $noticia['new_date'] ?></p>
        <div class="content">
        <p><?= $noticia['description'] ?></p>
         
        </div>
      </div>
    </div>
  </div>
</section>
  <?php break; }
  } ?>


<?php

$id_noticia = $_GET['id'] ?? null;
$array_comentarios = $result_testimonios->fetch_all(MYSQLI_ASSOC);
foreach ($array_comentarios as $comentario) {
    if ($comentario['id'] == $id_noticia) { ?>
        <section>
            <div class="container">
                <h2 class="font-tertiary mb-2 text-center">Comentarios</h2>
                <div class="col-lg-10 mx-auto">
                    <div class="media py-4">
                        <img src="<?= $comentario['image'] ?>" class="img-fluid align-self-start mr-3" alt="User image" style="width: 150px; height: 150px">
                        <div class="media-body">
                            <h5 class="mb-0 text-secondary"><?= $comentario['name'] ?> <?= $comentario['surname'] ?></h5>
                            <p><?= $comentario['description'] ?></p>
                            <div class="d-flex ">
                <?php
      
                for ($i = 1; $i <= 5; $i++) {
                  echo $i <= $comentario['rating'] ? '<i class="ti-star text-warning"></i>' : '<i class="ti-star text-muted"></i>';
                }
                ?>
              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }
} ?>


<br><br>
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

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>