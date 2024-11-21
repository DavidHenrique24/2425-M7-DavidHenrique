<?php 
session_start();
session_destroy();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Felicidades</title>
   <style>
    .body{
        background-color: white;


    }
    
   </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="cuerpo container text-center mt-4 ">
    <h2>Felicidades!! pasaste el escape room</h2>
    <img src="https://media.tenor.com/URFDMCokt3EAAAAM/jigsaw-saw.gif" class="img-fluid " alt="">
    </div>
    <div class="d-flex justify-content-center">
    <a href="index.php" class="btn btn-primary mt-5 " style="width: 150px;">Inicio</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>