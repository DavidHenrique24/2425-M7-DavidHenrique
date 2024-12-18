<header class="navbar navbar-light bg-light mb-5 fixed-top">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <h2 class="me-3 mb-0">Bienvenido <?php echo $_SESSION['nombre']; ?>!</h2>

      <img src="<?php echo $_SESSION['urlFoto']; ?>"  style="width: 50px; height: 50px;">
    </div>
  </div>
</header>
