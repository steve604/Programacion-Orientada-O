<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Agregar header -->
    <?php require('layouts/head.html'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg==" crossorigin="anonymous"></script>
    <title>POO</title>
  </head>
  <body>
    <!-- agregar el menu -->
    <?php include('layouts/navigation.html'); ?>
    <div class="container">
      <!-- Escribir todo aqui -->
      <h3>Promedio de notas</h3>
      <canvas id="promediosNotas" width="10%" height="3%"></canvas>
      <br>
      <br>
      <br>
      <h3>Desempeño por materias</h3>
      <canvas id="promediosFortalezas" width="10%" height="3%"></canvas>
      <br>
      <br>
      <br>
      <h3>Promedio de pagos</h3>
      <canvas id="promediosPagos" width="10%" height="3%"></canvas>
      
    </div>
    <script src="./assets/js/index.js"></script>
    <?php include('layouts/footer.html'); ?>
  </body>
</html>


