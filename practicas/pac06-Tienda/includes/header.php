
<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container-fluid d-flex justify-content-between">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="../data/assets/image.png" alt="logo-mercadona" class="img-fluid" style="height: 50px;">
    </a>

    <div>
      <!-- mensajes + avatar foto perfil -->
      <div class="d-flex align-items-center">
        <h2 class="me-3 mb-0 px-4">Bienvenido <?php echo $nombre?> !</h2>
        <img src="<?php echo $urlFoto?>" alt="Avatar"  style="width: 50px; height: 50px;">
      </div>

      <!-- Navegación -->
      <nav>
      <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-muted ">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-muted ">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-muted ">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-muted ">Acerca</a>
                        </li>
                    </ul>
                </nav> 
      
    </div>
  </div>
</header>
