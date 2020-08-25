<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Agregar header -->
    <?php require('../layouts/head.html'); require_once('../connection.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg==" crossorigin="anonymous"></script>
    <title>POO</title>
  </head>
  <body>
    <!-- agregar el menu -->
    <?php include('../layouts/navigation.html'); ?>
    <div class="container">
      <!-- Escribir todo aqui -->
      <br>
      <h1>Cuadro Estadistico</h1>
      <!-- Debes agregarlo al terminar, para poner un bucardor estadistico por alumno
      <form class="form" role="form" autocomplete="off">
         <div class="form-group row">
            <div class="col-lg-12 text-center">
                <label>Buscar por matricula</label>
                <input type="text" name="alunmobuscado">
                <input type="button" class="btn btn-primary" value="Save Changes">
            </div>
        </div>
      </form>
      -->
      <br>
      <h3>Promedio de notas</h3>
      <canvas id="promediosNotas" width="10%" height="3%"></canvas>
      <br>
      <!--
      <h3>Fortaleza por materias</h3>
      <canvas id="promedioAsistencia" width="10%" height="3%"></canvas>
      -->
    </div>
    <?php include('../assets/js/index.php'); include('../layouts/footer.html'); ?>
  </body>
</html>


