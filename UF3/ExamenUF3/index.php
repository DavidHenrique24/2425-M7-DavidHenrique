<?php 

include 'header.php'; 
require_once 'config.php';

// Consultas para Portafolio por id:
$result_vehicles = $mysqli->query("SELECT * FROM VEHICLES ORDER BY id DESC LIMIT 3");
?>

<!DOCTYPE html>
<html lang="es">

<!-- banner -->
<section class="banner bg-cover position-relative d-flex justify-content-center align-items-center" 
  style="background-image: url('https://ecomovilidad.net/wp-content/uploads/2016/10/Ecodriving_portada.jpg'); background-size: cover; background-position: center; height: 400px;">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">EcoDriving</h1>
      </div>
    </div>
  </div>
</section>

<section class="section  py-5 text-black">
  <div class="container-fluid px-5">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2 class="text-black mb-5">Ultimos vehiculos</h2>
        <div class="section-border"></div>
      </div>
    </div>

    <div class="row">
        <?php
        // Convertimos los resultados en un array
        $array_vehicles = $result_vehicles->fetch_all(MYSQLI_ASSOC); 
        foreach($array_vehicles as $vehicle) { ?>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="<?= $vehicle['imatge'] ?>" alt="project-thumb" class="card-img-top rounded" style="height: 300px; object-fit: cover;">
              <div class="card-body d-flex flex-column" style="height: 200px;">
                <h4 class="card-title text-primary"><?= $vehicle['model'] ?></a></h4>
                <p class="card-text flex-grow-1">Categoria: <?= $vehicle['categoria'] ?>$</p>
                <p class="card-text flex-grow-1">Precio: <?= $vehicle['preu_dia'] ?>$</p>
                <?if ($vehicle['disponible'] == 1) {
                  $vehicle['disponible'] = 'Disponible';
                } else {
                  $vehicle['disponible'] = 'No disponible';
                }
                ?>
                <p class="card-text flex-grow-1">Disponible: <?= $vehicle['disponible'] ?></p>
                <a href="" class="btn btn-outline-primary mt-auto">Reservar</a>
                <modal></modal>
              </div>
            </div>
          </div>
        <?php } ?>
       
      


   </div>

</section>










</body>
</html>
