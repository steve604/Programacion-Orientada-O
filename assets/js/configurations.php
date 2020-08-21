<?php
    if(isset($_POST['aula'])){
        echo '                
        <form class="form" role="form" autocomplete="off">
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Nombre             </label>
            <div class="col-lg-9">
                <input class="form-control" type="text" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-12 text-center">
                <input hidden name="aula"></input>
                <input name="cancel" type="submit" class="btn btn-secondary" value="Cancel">
                <input neme="guardarAula" type="submit" class="btn btn-primary" value="Save Changes">
            </div>
        </div>
    </form>"';
    }

    if(isset($_POST['cancel'])){
        echo "Hola";
    }

?>