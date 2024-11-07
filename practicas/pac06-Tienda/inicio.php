<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido a Mercadona</title>
  <!-- Link CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <div class="container-fluid">
    <div class="container text-center my-5">
      <h1>Bienvenido a Mercadona</h1>
      <p>Por favor, completa el siguiente formulario para continuar tu compra.</p>
    </div>

    <div class="container d-flex justify-content-center">
  <form action="index.php" method="POST">
  <div class="mb-3">
  <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" class="form-control" id="nombre" required>
  </div>
  
  <div class="mb-3">
  <label for="telefono">Telefono:</label>
  <input type="text" name="telefono" class="form-control" id="telefono" required>
  </div>

  <div class="mb-3">
  <label for="urlFoto">Url de foto de perfil</label>
  <input type="text" name="urlFoto" class="form-control" id="urlFoto" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
