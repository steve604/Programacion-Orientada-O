<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Agregar header -->
    <?php require('../layouts/head.html'); require_once('../connection.php');?>
    <title>Calificaciones</title>
  </head>
  <body>
    <!-- agregar el menu -->
    <?php include('../layouts/navigation.html');
    if ($_POST){
      $asignatura = $_POST['Asignatura'];
      $grado = $_POST['Aula'];
      $seccion = $_POST['Seccion'];
    }else{
      $asignatura = "0";
      $grado = "0";
      $seccion = "0";
    }
    echo $asignatura, $grado, $seccion;
    ?>
    <div class="container">
      <!-- Escribir todo aqui -->
      <table class="table table-bordered table-striped">
      <form class="form" role="form" method="post" autocomplete="off">
        <div class="dropdown">
          <label class="col-lg-1 col-form-label form-control-label">Asignatura</label>          
            <select name ="Asignatura" required class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <option value="<?php $asignatura ?>">Seleccione</option>
            <?php
                $sql = "SELECT cod_asig, descripcion FROM Asignatura WHERE estado = 1 ORDER BY cod_asig";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $asignatura = $row['descripcion'];
                $cod = $row['cod_asig'];
                echo "<option value='{$cod}'>$asignatura";
            }
            ?>
            </select>
            <label class="col-lg-1 col-form-label form-control-label">Aula</label>
            <select name ="Aula" required class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <option value="<?php $grado ?>">Seleccione</option>
            <?php
                $sql = "SELECT cod_gra, grado from Grado ORDER BY grado";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $grado = $row['grado'];
                $cod = $row['cod_gra'];
                echo "<option value='{$cod}'>$grado";
            }
            ?>
            </select>
            <label class="col-lg-1 col-form-label form-control-label">Seccion</label>          
            <select name ="Seccion" required class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <option value="<?php $seccion ?>">Seleccione</option>
            <?php
                $sql = "SELECT * FROM Seccion ORDER BY nombre";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $Seccion = $row['nombre'];
                $id = $row['id'];
                echo "<option value='{$id}'>$Seccion";
            }
            ?>
            </select>
            <label class="col-lg-0"></label>
        <input name="Buscar" value="Buscar" type="submit" class="btn btn-primary">
        </div>
      </form>
      <form class="form" role="form" method="post" action="crear.php" autocomplete="off">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Enero</th>
              <th scope="col">Febrero</th>
              <th scope="col">Marzo</th>
              <th scope="col">Abril</th>
              <th scope="col">Mayo</th>
              <th scope="col">Junio</th>
              <th scope="col">Julio</th>
              <th scope="col">Agosto</th>
              <th scope="col">Septiembre</th>
              <th scope="col">Octubre</th>
              <th scope="col">Noviembre</th>
              <th scope="col">Diciembre</th>
            </tr>
          </thead>
          <tbody>
              <?php include('../assets/js/notas.php');?>
          </tbody>
        </table>
        <?php
        if ($_POST) {
                ?>
                <input name="Guardar" value="Guardar" type="submit" class="btn btn-primary">
                <?php
              }
        ?>
          <input hidden type="text" name="Asignatura" value=" <?php echo $asignatura;?> "></input>
          <input hidden type="text" name="Aula" value=" <?php echo $grado;?> "></input>
          <input hidden type="text" name="Seccion" value=" <?php echo $seccion?> "></input>
      </form>
    </div>
    <?php include('../layouts/footer.html'); ?>
  </body>
</html>
