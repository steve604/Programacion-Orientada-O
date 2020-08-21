<?php
    if(isset($_POST['seccion'])){
        if (isset($_POST['guardarAula'])) {
                $variable = $_POST['valor'];
                $sql = 'exec SpSeccion @descripcion = '. $variable;
                if(sqlsrv_query($conn, $sql)){
                    echo "Se ha guardado correctamente";
                }else{
                    echo "Este dato ya existe";
                }
        }
        echo '                
        <form class="form" role="form" autocomplete="off" method="POST">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label form-control-label">Nombre             </label>
            <div class="col-lg-9">
                <input name="valor" required class="form-control" type="text" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-12 text-center">
                <input hidden name="aula"></input>
                <input name="guardarAula" size="5" value="Guardar"type="submit" class="btn btn-primary">
            </div>
        </div>
        </form>
    ';
    }

    if(isset($_POST['grado'])){
        if (isset($_POST['guardarGrado'])) {
            $estatus = 0;
            if (isset($_POST['estatus'])) {
                $estatus = 1;
            }
            $detalle = $_POST['detalle'];
            $grado = $_POST['grado'];
            $max = 0;
            $sql = "SELECT * FROM VMaxGrado";
            $result = sqlsrv_query($conn, $sql);
            while($row = sqlsrv_fetch_array($result)){
                $max = $row["id"];
                $max ++;
            }

            $sql = "exec SpGrado @id = {$max}, @grado = {$grado}, @estatus = {$estatus}, @detalle = {$detalle}";

            //var_dump($sql);
            if(sqlsrv_query($conn, $sql)){
                echo "Se ha guardado correctamente";
            }else{
                echo "Este dato ya existe";
            }
    }
    echo '                
        <form class="form" role="form" autocomplete="off" method="POST">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label form-control-label">Nombre      </label>
            <div class="col-lg-9">
                <input name="grado" required class="form-control" type="text" >
            </div>
            <label class="col-lg-2 col-form-label form-control-label">Detalle             </label>
            <div class="col-lg-9">
                <input name="detalle" required class="form-control" type="text" >
            </div>
            <label class="col-lg-2 col-form-label form-control-label">Estado</label>
            <div class="col-lg-9">
             <input type="checkbox" id="check" name="estatus">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-12 text-center">
                <input name="guardarGrado" size="5" value="Guardar"type="submit" class="btn btn-primary">
            </div>
        </div>
        </form>
';
    }

?>