<?php

  if ($_POST) {
    $grado = $_POST['Curso'];
    $seccion = $_POST['Seccion'];
    $asignatura = $_POST['Asignatura'];
    ?>
    <thead>
            <tr>
              <th scope="col">Numero</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Asistencia</th>
              <th scope="col">fecha</th>
            </tr>
          </thead>
          <tbody>
              <form action="" method="post">
            <tr>
            <?php
            $sql = "SELECT * from VEstudiantes";
            $result = sqlsrv_query($conn, $sql);
                while($row = sqlsrv_fetch_array($result)){
                  $nombre = $row['nom_ter'];
                  $apellido = $row['ape_est'];
                  $numero = $row['cod_est'];
                  ?>
                    <th scope="row"><?php   echo $numero ?></th>
                    <td><?php echo $nombre?> </td>
                    <td><?php echo $apellido?></td>
                    <td><input type="checkbox" id="check" name="check" onclick="play();"></td>
                    <td ><div id="3d" name="fecha"></div></td>
                  </tr>
                </tbody>
                  <?php
                }
      ?>
<input name="Guardar" class="btn btn-success btn-lg btn-block" value="Guardar" type="submit" class="btn btn-primary">
      <?php
  }
?>